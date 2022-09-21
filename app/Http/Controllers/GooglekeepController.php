<?php

namespace App\Http\Controllers;

use App\Http\Requests\GoogleKeepRequest;
use App\Models\Category;
use App\Models\Googlekeep;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class GooglekeepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\view\view
     */
    public function index()
    {

        $query = Googlekeep::orderBy('id', 'desc');
        $search_text = request()->search;
        if (!empty($search_text)) {
            $query->where('title', 'like', '%' . $search_text . '%')
                ->orWhere('note', 'like', '%' . $search_text . '%')
                ->orWhere('status', 'like', '%' . $search_text . '%')
                ->with('status', 'like', '%' . $search_text . '%');
        }
        $data = [];
        $data['notes'] = $query->get();
        $data['categories'] = Category::all();
        return view('admin.googlekeep', $data);
    }

    function categorySearch($id)
    {
        $data = [];
        $data['notes'] = GoogleKeep::where('category_id', $id)->get();
        $data['categories'] = Category::all();
        return view('admin.googlekeep', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoogleKeepRequest $request)
    {

        // image upload
        if ($request->file('image')) {
            $file = $request->image;
            $image_name = Str::of($request->title)->slug() . '-' . '.' . $file->extension();
            $image = $file->storePubliclyAs('public/googleKeep', $image_name);
        }
        $notes = [
            'title' => $request->title,
            'note' => $request->note,
            'status' => $request->status,
            'category_id' => $request->category_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'image' => $request->file('image') == true ? $image : 'null'

        ];
        Googlekeep::insert($notes);
        return redirect()->route('googleKeep.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Googlekeep  $googlekeep
     * @return \Illuminate\Http\Response
     */
    public function show(Googlekeep $googlekeep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Googlekeep  $googlekeep
     * @return \Illuminate\Http\Response
     */
    public function edit($id_or_slug)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Googlekeep  $googlekeep
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Googlekeep  $googlekeep
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_or_slug)
    {
        $notes = $this->getGoogleKeepById($id_or_slug);
        if ($notes->image) {
            Storage::delete($notes->image);
        }
        $notes->delete();
        return redirect()->route('googleKeep.index');
    }
    public function getGoogleKeepById($id_or_slug)
    {
        if (is_numeric($id_or_slug)) {
            return $notes = Googlekeep::query()->find($id_or_slug);
        }
    }
}
