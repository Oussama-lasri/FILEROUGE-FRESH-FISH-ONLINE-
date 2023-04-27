<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorecommandeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstName'=> ['required'],
            'lastName'=> ['required'],
            'email'=> ['required'],
            'user_id'=> ['required'],
            'phone'=> ['required'],
            'adress'=> ['required'],
            'city'=> ['required'],
        ];
    }
}
