<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TasksRequest extends FormRequest
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
            'description' => 'nullable|min:15',
            'status' => 'required|string',
            'image' => 'nullable|image',
        ];
    }
    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'title|required' => 'Task Title is Required',
            'description|min:15' => 'Write Min 15 Character',
            'status|required' => 'Status Must be required',
            'image|image' => 'Upload Must be an Image',
        ];
    }

}
