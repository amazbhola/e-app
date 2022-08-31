<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\view\view
     */
    public function index()
    {

        $posts = Post::with('category')->get();
        return view('admin.post_table',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\view\view
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.post_form',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $post = new Post();
        $post->title = $request->post_title;
        $post->slug = Str::slug($request->post_title,'-');
        // $post->slug = Str::of($request->post_title)->slug();
        $post->description = $request->description;
        $post->image = Storage::putFile('public',$request->image);
        $post->user_id = 1;
        $post->category_id = $request->category;
        $post->save();


        return back();
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\view\view
     */
    public function edit(Post $post)
    {
        $editpost = Post::with('category')->find($post);
        return view('admin.post_edit_form',compact('editpost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_or_slug)
    {
        // check post is exist
        $posts = $this->getPostIdorSlug($id_or_slug);


        if (!$posts) {
            session()->flash('error', 'Sorry, Post not found');
            return redirect()->route('post.index');
        }
        // check image and delete
        if ($posts->image) {
            Storage::delete($posts->image);
        }
        // delete post
        $posts->delete();

        // message session

        session()->flash('success','Post Delete Successfully');
        return redirect()->route('post.index');
    }

    public function getPostIdorSlug($id_or_slug)
    {
        if (is_numeric($id_or_slug)) {
            return $posts = Post::find($id_or_slug);
        }else{
            return $posts = Post::where('slug',$id_or_slug)->first();
        }
    }
}
