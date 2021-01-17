<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'nama' => 'required|size:6',
			'username' => 'required|unique:user,username',
			'email' => 'required|unique:user,email|email:rfc,dns',
            'password' => 'required',
            'user_hp' => 'required',
            'jenis_kelamin' => 'required',
        ];
    }

    function messages(){
        return[
            'nama.required' => 'Field nama tidak boleh kosong',
            'username.required' => 'Field Ussername tidak boleh kosong',  
            'email.required' => 'Field email tidak boleh kosong',  
            'password.required' => 'Field password tidak boleh kosong',  
            'user_hp.required' => 'Field No Hp tidak boleh kosong',  
            'jenis_kelamin.required' => 'Field Jenis Kelamin tidak boleh kosong', 
        ];
    }
}
