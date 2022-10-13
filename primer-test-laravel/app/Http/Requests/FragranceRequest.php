<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FragranceRequest extends FormRequest
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
            //
            'name' => 'required',
            'ranking' => ['required', 'integer'],
            'brand_name' => 'required',
            'is_original' => 'required',
            'status' => 'required',
            'price' => ['required', 'integer'],
            'discount' => ['required', 'integer'],
            'saleend' => ['required', 'date']
        ];
    }
}
