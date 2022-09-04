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
        return view('admin.post_table', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\view\view
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.post_form', compact('categories'));
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
        $post->slug = Str::slug($request->post_title, '-');
        // $post->slug = Str::of($request->post_title)->slug();
        $post->description = $request->description;
        // upload image
        if ($request->file('image')) {
            $file = $request->image;
            $image_name = Str::of($request->title)->slug() . '-' . $post->id . '.' . $file->extension();
            $post->image = $file->storePubliclyAs('public/posts', $image_name);
        }

        $post->user_id = 1;
        $post->category_id = $request->category;
        $post->save();


        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id_or_slug)
    {
        return view('admin.post_pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\view\view
     */
    public function edit($id_or_slug)
    {
        $post = $this->getPostIdOrSlug($id_or_slug);
        if (!$post) {
            session()->flash('error', 'Post not found');
            return redirect()->route('post.index');
        }
        $data['post'] = $post;
        $data['categories'] = Category::all();
        return view('admin.post_edit_form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_or_slug)
    {
        $post = $this->getPostIdOrSlug($id_or_slug);
        if (!$post) {
            session()->flash('error', 'Post not found');
            return redirect()->route('post.index');
        }
        $post->title = $request->post_title;
        $post->slug = Str::slug($request->post_title, '-');
        // $post->slug = Str::of($request->post_title)->slug();
        $post->description = $request->description;
        // delete image

        // upload image

        if ($request->image) {
            if ($post->image) {
                Storage::delete($post->image);
            }
            $file = $request->image;
            $image_name = Str::of($request->title)->slug() . '-' . $post->id . '.' . $file->extension();
            $post->image = $file->storePubliclyAs('public/posts', $image_name);
        }

        $post->user_id = 1;
        $post->category_id = $request->category;
        $post->save();
        session()->flash('success', 'Post Update Successfully');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_or_slug)
    {
        // check post is exist
        $posts = $this->getPostIdOrSlug($id_or_slug);


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

        session()->flash('success', 'Post Delete Successfully');
        return redirect()->route('post.index');
    }

    public function getPostIdOrSlug($id_or_slug)
    {
        if (is_numeric($id_or_slug)) {
            return $posts = Post::find($id_or_slug);
        } else {
            return $posts = Post::where('slug', $id_or_slug)->first();
        }
    }
}
