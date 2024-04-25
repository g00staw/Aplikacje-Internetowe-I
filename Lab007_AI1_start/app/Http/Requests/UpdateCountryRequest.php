<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCountryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:countries,name,'.$this->country->id.'|max:50',
            'code' => 'required|unique:countries,code,'.$this->country->id.'|max:5',
            'currency' => 'required|max:50',
            'area' => 'required|max:50',
            'language' => 'required|max:50',
        ];
    }
}
