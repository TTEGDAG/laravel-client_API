<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'   =>  'required|string|max:50',
            'last_name'   =>  'required|string|max:50',
            'email'   =>  'required|email:rfc,dns',
            'avatar'   =>  'required|URL|regex: /\.jpg$/'
        ];
    }
}
