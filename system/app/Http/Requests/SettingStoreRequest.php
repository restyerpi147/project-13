<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'current' => 'required',
			'new' => 'required',
			'confirm' => 'required',
        ];
    }

    function messages(){
        return[
            'current.required' => 'Field nama tidak boleh kosong',
            'new.required' => 'Field harga tidak boleh kosong',  
            'confirm.required' => 'Field foto tidak boleh kosong',  
            
        ];
    }

}
