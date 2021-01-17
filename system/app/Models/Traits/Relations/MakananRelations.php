<?php
namespace App\Models\Traits\Relations;

use Illuminate\Support\Str;

     trait MakananRelations {
        
        
        function handleUploadFoto(){
            if(request()->hasFile('foto')){
                $foto = request()->file('foto');
                $destination =  "images/makanan";
                $randomStr = Str::random(5);
                $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
                $url = $foto->storeAs($destination, $filename); 
                $this->foto = "app/".$url;
                $this->save();
            }
        }

        function handleDelete(){
            $foto = $this->foto;
            $path = public_path($foto);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
 }

