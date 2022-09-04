<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\view\view
     */
    public function index()
    {
        $data = [];
        $data['doctors'] = Doctor::all();
        return view('admin.doctor_table', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\view\view
     */
    public function create()
    {
        return view('admin.doctor_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation

        // store
        $doctor = Doctor::create([
            'name' => $request->name,
            'degree' => $request->degree,
            'specialist' => $request->specialist,
            'phone' => $request->phone,
            'job_location' => $request->job_location,
            'email' => $request->email,
        ]);
        $doctor->save();
        // message
        return redirect()->route('doctor.index');
        // route
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\view\view
     */
    public function edit($id_or_slug)
    {

        $doctors = $this->getIdOrSlug($id_or_slug);
        if (!$doctors) {
            session()->flash('error', 'Doctor not found');
            return redirect()->route('doctor.index');
        }
        $data['doctor'] = $doctors;
        return view('admin.doctor_edit_form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_or_slug)
    {
        $doctors = $this->getIdOrSlug($id_or_slug);
        if (!$doctors) {
            session()->flash('error', 'Doctor not found');
            return redirect()->route('doctor.index');
        }

        $doctors->name  =  $request->name;
        $doctors->degree = $request->degree;
        $doctors->specialist = $request->specialist;
        $doctors->phone = $request->phone;
        $doctors->job_location = $request->job_location;
        $doctors->email = $request->email;

        $doctors->save();

        session()->flash('success', 'Doctor Profile update Successfully');
        return redirect()->route('doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_or_slug)
    {
        $doctor = $this->getIdOrSlug($id_or_slug);
        $doctor->delete();
        session()->flash('success','Doctors Data Delete Successfully');
        return redirect()->route('doctor.index');
    }
    public function getIdOrSlug($id_or_slug)
    {
        if (is_numeric($id_or_slug)) {
            return $posts = Doctor::find($id_or_slug);
        } else {
            return $posts = Doctor::where('slug', $id_or_slug)->first();
        }
    }
}
