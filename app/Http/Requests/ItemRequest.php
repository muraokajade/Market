<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'user_id' => 'required',
            'name' => 'required|max:255',
            'description' => 'required|max:1000',
            'category_id' => 'required',
            'price' => 'numeric|min:0',
            'image' => 'file|image|mimes:png,jpg,jpeg|dimensions:min_width=50,min_height=50,max_width=1000,max_height=1000',
        ];
    }
}
