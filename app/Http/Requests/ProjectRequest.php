<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:1|max:255',
            'description' => 'required|min:1|max:255',
            'created_at' => 'required|date',
            'updated_at' => 'required|date',
            'is_edited' => 'required',
            'user_id' => 'required',
            'note_id' => 'required',
        ];
    }
}
