<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KomenRequest extends FormRequest
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
            'nama_pengomen' => 'required|min:4|max:30',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:20',
            'pesan' => 'required|min:4|',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Inputan tidak boleh kosong!!',
            'min' => 'Inputan minimal :min karakter!!',
            'max' => 'Inputan maximal :max karakter!!',
            'in' => 'Pilihan tidak valid!!',
            'email' => 'Inputan harus email'
        ];
    }
}
