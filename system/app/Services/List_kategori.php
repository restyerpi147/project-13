<?php

namespace App\Services;
use App\Models\Kategori;

class TimeServices {

    public function list_kategori(){
        $data[list_katagori] = Kategori::all();
        return view('admin/makanan/create');
    }

}