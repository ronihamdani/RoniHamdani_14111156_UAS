<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'Required',
            'jenis_kelamin' => 'Required',
            'alamat' => 'Required',
            'nim' => 'Required',
        ];
    }

    public function message()
    {
        return [
            'nama.Required' => 'Tidak boleh kosong',
            'jenis_kelamin.Required' => 'Tidak boleh kosong',
            'alamat.Required' => 'Tidak boleh kosong',
            'nim.Required' => 'Tidak boleh kosong',
        ];
    }
}
