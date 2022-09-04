<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Department extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'name' => 'required',
            'address' => 'nullable',
            'logo' => 'nullable|image',
            'reg_no' => 'nullable',
            'trade_license_no' => 'nullable',
            'tin_no' => 'nullable',
            'vat_no' => 'nullable',
            'phone' => 'nullable',
            'fax' => 'nullable',
            'mobile' => 'nullable',
            'email' => 'required'
        ];
    }
    public function messages()
    {
       return [
        'name|required'=>'Department Name is Required',
        'logo|image' =>'Upload a valid Image'
       ];
    }
}
