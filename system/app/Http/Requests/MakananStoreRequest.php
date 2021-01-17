<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MakananStoreRequest extends FormRequest
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
            'nama' => 'required|unique:makanan,nama',
			'harga' => 'required',
			'foto' => 'required',
            'qty' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
        ];
    }

    function messages(){
        return[
            'nama.required' => 'Field nama tidak boleh kosong',
            'harga.required' => 'Field harga tidak boleh kosong',  
            'foto.required' => 'Field foto tidak boleh kosong',  
            'qty.required' => 'Field stock tidak boleh kosong',  
            'kategori.required' => 'Field kategori Hp tidak boleh kosong',  
            'deskripsi.required' => 'Field deskripsi tidak boleh kosong', 
        ];
    }
}
