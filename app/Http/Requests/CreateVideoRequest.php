<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVideoRequest extends FormRequest
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
            'title' => 'required|max:250',
            'categories' => 'required',
            'short_description' => 'required',
            'url' => 'required|url',
            /*'start_date' => 'required',
            'end_date' => 'required',
            'event_date' => 'required',*/
        ];
    }
}
