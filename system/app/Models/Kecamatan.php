<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelurahan;



 class Kecamatan extends Model {
   
    protected $table = 'kecamatan';

    function desa(){
        return $this->belongsTo(Desa::class, 'id_kelurahan');
    }

 }

