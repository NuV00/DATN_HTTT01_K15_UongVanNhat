<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SetupStoreRequest extends FormRequest
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
            'name' => [
                'required',
                'max:255',
            ],
            'name_store' => [
                'required',
                'max:255',
            ],
            'city_id' => [
                'required',
            ],
            'district_id' => [
                'required',
            ],
            'address_store' => [
                'required',
                'max:255'
            ],
            'phone' => [
                'required',
                'size:10'
            ],
        ];
    }
}
