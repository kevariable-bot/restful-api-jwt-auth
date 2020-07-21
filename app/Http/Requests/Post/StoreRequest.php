<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => ['min:3', 'max:50', 'required'],
            'body' => ['required'],
            'tags' => ['array', 'required'],
            'tags.*' => ['exists:tags,id']
        ];
    }

    public function messages()
    {
        return [
            'tags.*.exists' => 'error cuk gk nemu :v'
        ];
    }
}
