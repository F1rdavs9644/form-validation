<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'age' => 'required|integer|min:18',
            'password' => 'required|confirmed|min:8',
            'product_name' => 'required|string|min:3',
            'avatar' => 'image|mimes:jpeg,png,jpg|max:2048',
            'website' => 'required|url',
            'price' => 'required|numeric|min:0',
            'published_at' => 'required|date',
            'start_date' => 'required|date|after:today',
            'end_date' => 'required|date|before:start_date',
        ];
    }
}
