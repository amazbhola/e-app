<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\view\view
     */
    public function index()
    {
        $categories = Category::paginate(5);

        return view('admin.category_table', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\view\view
     */
    public function create()
    {
        return view('admin.category_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'title' => 'required|min:5|max:100',
        ]);

        // modify data

        // Data store
        //way no -1
        // ========================================
        $category = new Category();
        $category->title = $request->title;
        $category->user_id = 1;
        $category->save();
        // ===================================
        //way no -2
        // $data = [
        //     'title' => $request->title,
        //     'user_id' => 1,
        // ];
        // Category::create($data);
        // =====================================================
        //war no 3

        // Category::create($request->all());
        // session massage
        session()->flash('success', $request->title.' Data save Successfully');

        return redirect()->route('category.create');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
    }
}
