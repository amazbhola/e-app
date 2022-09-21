<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoogleKeepRequest extends FormRequest
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
            'title' => 'required',
            'note' => 'nullable|min:20',
            'status' => 'required',
            'category_id' => 'required',
            'image' => 'image'
        ];
    }
    public function messages()
    {
        return [
            'title|required' => 'title is required',
            'note|min:20' => 'Description Minimum 20 Character',
            'image|image' => 'You must upload an image',
            'status|required' => 'select note status',
            'category_id|required' => 'select a category',

        ];
    }
}
