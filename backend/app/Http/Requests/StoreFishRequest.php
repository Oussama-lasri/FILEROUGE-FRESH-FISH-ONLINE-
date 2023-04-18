<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreFishRequest extends FormRequest
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
     * @return array<string, Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'status' => ['required'],
            'quantity' => ['required'],
            'image' => ['required'],
            'category_id' => ['required'],
            'buy_by_id' => ['required'],
        ];
    }
}
