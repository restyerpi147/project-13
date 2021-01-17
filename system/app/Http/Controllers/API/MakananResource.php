<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Makanan::all();
        return $list_makanan->toJson();
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
  
        if(request('nama') && request ('id_user')  && request ('foto') && request('harga') && request ('kategori') && request ('deskripsi')){
            $makanan = new Makanan;
            $makanan->nama = request('nama');
            $makanan->id_user = request('id_user');
            $makanan->harga = request('harga');
            $makanan->foto = request('foto');
            $makanan->kategori = request('kategori');
            $makanan->deskripsi = request('deskripsi');
            $makanan->save();

            return collect([
                'respon' => 200,
                'data' => $makanan
            ]);
        }else {
            return collect([
                'respon' => 500,
                'message' => "ada yang kosong"
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $makanan = Makanan::find($id);
        if($makanan){
            return collect([
                'status' => 200,
                'data' => $makanan
            ]);
        }else {
            return collect([
                'respon' => 500,
                'message' => "Makanan tidak di temukan"
            ]);
        }
    }

   
    public function update($id)
    {
        $makanan = Makanan::find($id);
        if($makanan){

            $makanan->nama = request('nama') ?? $makanan->nama;
            $makanan->id_user = request('id_user') ?? $makanan->id_user;
            $makanan->harga = request('harga') ?? $makanan->harga;
            $makanan->foto = request('foto') ?? $makanan->foto;
            $makanan->kategori = request('kategori') ?? $makanan->kategori;
            $makanan->deskripsi = request('deskripsi') ?? $makanan->deskripsi;
            $makanan->save();

            return collect([
                'status' => 200,
                'data' => $makanan
            ]);
        }
        return collect([
                'respon' => 500,
                'message' => "Makanan tidak di temukan"
            ]);
        
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $makanan = Makanan::find($id);
        if($makanan){
            $makanan->delete();
            return collect([
                'status' => 200,
                'data' => "Makanan Berhasil di hapus"
            ]);
        }else {
            return collect([
                'respon' => 500,
                'message' => "Makanan tidak di temukan"
            ]);
        }
    }
}
