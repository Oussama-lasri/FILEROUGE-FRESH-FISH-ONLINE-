<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecepieRequest extends FormRequest
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
            'title' => ['required'],
            'dish_type' => ['required'],
            'image' => ['required'],
            'Serves' => ['required'],
            'preparation_time' => ['required'],
            'cooking_time' => ['required'],
            'difficulty' => ['required'],
            'cuisine_type' => ['required'],
            'ingredients' => ['required'],
            'method' => ['required'],
            'category' => ['required'],
        ];
    }
}
