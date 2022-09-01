<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
     * @return \Illuminate\view\view
     */
    public function edit($id_or_slug)
    {
        $category = $this->getIdOrSlug($id_or_slug);
        if (!$category) {
            session()->flash('error','category not found');
            return redirect()->route('category.index');
        }
        return view('admin.category_edit_form',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_or_slug)
    {
        $category = $this->getIdOrSlug($id_or_slug);
        if (!$category) {
            session()->flash('error','Category not found');
            return redirect()->route('category.index');
        }
        $category->title = $request->title;
        $category->user_id = 1;
        // check image file
        if ($category->image) {
           Storage::delete($category->image);
        }
        // upload new image
        if ($request->file('image')) {
            $file = $request->image;
            $image_name = Str::slug($category->title,'-').$category->id.'.'.$file->extension();
            $category->image = $file->storePubliclyAs('public/category',$image_name);

        }
        $category->save();
        session()->flash('success','Post Update Successfully');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_or_slug)
    {
        // check database data
        $category = $this->getIdOrSlug($id_or_slug);
        if(!$category){
            session()->flash('error','Category not found');
            return redirect()->route('category.index');
        }
        // check an image
        if ($category->image) {
            Storage::delete($category->image);
        }

        // delete category
        $category->delete();

        // session messages
        session()->flash('success','Category Delete Successfully');
        return redirect()->route('category.index');

    }

    public function getIdOrSlug($id_or_slug)
    {
        if (is_numeric($id_or_slug)) {
            return $category = Category::find($id_or_slug);
        }else{
            return $category = Category::where('slug',$id_or_slug);
        }
    }
}
