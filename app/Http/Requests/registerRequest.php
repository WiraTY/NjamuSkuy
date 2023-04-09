<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'nama' => 'required|min:4',
            'email' => 'required|min:3|email',
            'password' => 'required|min:4'
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Inputan tidak boleh kosong!!',
            'min' => 'Inputan minimal :min karakter!!',
            'max' => 'Inputan maximal :max karakter!!',
            'in' => 'Pilihan tidak valid!!',
            'email' => 'Inputan Harus Email',
        ];
    }
}
