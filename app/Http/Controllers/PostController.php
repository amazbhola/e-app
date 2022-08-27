<?php

namespace App\Http\Controllers;

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
        return view('admin.post_table');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\view\view
     */
    public function create()
    {
        return view('admin.post_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            // $table->string('title', 100);
    //         $table->string('slug')->unique();
    //         $table->text('description')->nullable();
    //         $table->string('image')->nullable();
    //         $table->bigInteger('total_view')->default(0);
    //         $table->boolean('is_active')->default(1);
    //         $table->unsignedBigInteger('user_id');
    //         $table->foreign('user_id')->references('id')->on('users');
    //         $table->unsignedBigInteger('category_id');
    //         $table->foreign('category_id')->references('id')->on('category');
    //         $table->timestamps();

        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title,'-');
        $post->description = $request->description;
        $post->image = Storage::putFile('public',$request->image);
        

        return redirect()->route('post.create');
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
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
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
    public function destroy(Post $post)
    {
    }
}
