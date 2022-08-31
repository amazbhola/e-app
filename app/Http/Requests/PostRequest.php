<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "post_title" =>"required",
            "description" =>"nullable|min:10",
            "image" =>"nullable|image",

        ];
    }
    public function messages()
    {
        return [
            "post_title|required" =>"title is required",
            "description|min:10" =>"Description Minimum 10 Character",
            "image|image" =>"You must upload an image",

        ];
    }
}
