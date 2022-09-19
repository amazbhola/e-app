<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Models\Email;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\view\view
     */
    public function index()
    {
        $query = Email::orderBy('updated_at', 'desc');
        $search_text = request()->s;
        if (!empty($search_text)) {
            $query->where('email', 'like', '%' . $search_text . '%');
        }

        $data = [];
        $data['emails'] = $query->paginate(5);
        return view('admin.email_table', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\view\view
     */
    public function create()
    {
        return view('admin.email_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmailRequest $request)
    {
        $emails = explode(',', $request->email);
        $total = 0;
        // =====================================================
        // foreach ($emails as $emailObj) {
        //     // Trim email
        //     $emailString = trim($emailObj);
        //     // Validate Email check
        //     if (filter_var($emailString, FILTER_VALIDATE_EMAIL) !== false) {
        //         // Existing email Check
        //         if (!Email::where('email', $emailString)->limit(1)->exists()) {
        //             $email = new Email();
        //             $email->email = $emailString;
        //             $email->save();
        //             $total++;
        //         } else {
        //             session()->flash('error', 'Email Already Exists');
        //             return back();
        //         }
        //     } else {
        //         session()->flash('error', 'Insert a valid email address');
        //         return back();
        //     }
        // }
        // ======================================================
        // Optimization method
        $validEmail = [];

        foreach ($emails as $emailObj) {
            // Trim email
            $emailString = trim($emailObj);
            // Validate Email check
            if (filter_var($emailString, FILTER_VALIDATE_EMAIL) !== false) {
                // Existing email Check
                if (!Email::where('email', $emailString)->limit(1)->exists()) {
                    $validEmail = [
                        'email' => $emailString,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                    $total++;
                }
            }
        }
        if ($total > 0) {
            Email::insert($validEmail);
        }
        if ($total > 0) {
            session()->flash('success', $total . ' Email added Successfully');
            return redirect()->route('email.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        $email->delete();
        session()->flash('success', 'Email Delete Successfully');
        return redirect()->route('email.index');
    }
}
