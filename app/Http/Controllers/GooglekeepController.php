<?php

namespace App\Http\Controllers;

use App\Models\Googlekeep;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        $search_text = request()->s;
        if (!empty($search_text)) {
            $query->where('title', 'like', '%' . $search_text . '%');
        }
        $data = [];
        $data['notes'] = Googlekeep::all();
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
    public function store(Request $request)
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
            'status' => 'active',
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
    public function edit(Googlekeep $googlekeep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Googlekeep  $googlekeep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Googlekeep $googlekeep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Googlekeep  $googlekeep
     * @return \Illuminate\Http\Response
     */
    public function destroy(Googlekeep $googlekeep)
    {
        //
    }
}
