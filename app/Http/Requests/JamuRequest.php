<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JamuRequest extends FormRequest
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
            'nama_jamu' => 'required',
            'gambar_jamu' => 'image|file',
            'deskripsi' => 'required|min:3|max:75',
            'harga' => 'required|min:4|',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Inputan tidak boleh kosong!!',
            'min' => 'Inputan minimal :min karakter!!',
            'max' => 'Inputan maximal :max karakter!!',
            'in' => 'Pilihan tidak valid!!',
            'image' => 'Harus file image'
        ];
    }
}
