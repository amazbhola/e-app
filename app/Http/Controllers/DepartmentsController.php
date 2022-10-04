<?php

namespace App\Http\Controllers;

use App\Http\Requests\Department;
use App\Models\Departments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DepartmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\view\view
     */
    public function index()
    {
        $data = [];
        $data['department'] = Departments::first();

        return view('admin.department', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\view\view
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function show(Departments $departments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\view\view
     */
    public function edit($id_or_slug)
    {
        $department = $this->getIdOrSlug($id_or_slug);

        return view('admin.department_form', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function update(Department $request, $id_or_slug)
    {

        $department = $this->getIdOrSlug($id_or_slug);
        if (!$department) {
            session()->flash('error', 'Department not found');

            return redirect()->route('department.index');
        }
        try {
            $department->name = $request->name;
            $department->address = $request->address;
            $department->reg_no = $request->reg_no;
            $department->trade_license_no = $request->trade_license_no;
            $department->tin_no = $request->tin_no;
            $department->vat_no = $request->vat_no;
            $department->phone = $request->phone;
            $department->fax = $request->fax;
            $department->mobile = $request->mobile;
            $department->email = $request->email;
            if ($request->logo) {
                if ($department->logo) {
                    Storage::delete($department->logo);
                }
                $logo = $request->logo;
                $logoName = Str::of($request->mobile)->slug() . time() . '.' . $logo->extension();
                $department->logo = $logo->storePubliclyAs('public/logo', $logoName);
            }

            $department->save();
            session()->flash('success', 'Department Update Successfully');

            return redirect()->route('department.index');
        } catch (\Exception $e) {
            return  $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departments  $departments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departments $departments)
    {
        //
    }

    public function getIdOrSlug($id_or_slug)
    {
        if (is_numeric($id_or_slug)) {
            return Departments::find($id_or_slug);
        } else {
            return Departments::where('name', $id_or_slug)->first();
        }
    }
}
