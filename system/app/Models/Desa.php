<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kecamatan;
use App\Models\Ibukota;


 class Desa extends Model {
   
    protected $table = 'kelurahan';

    function kecamatan(){
        return $this->hasMany(Kecamatan::class,'id_kecamatan');
    }

    function kabupaten(){
        return $this->belongsTo(kabupaten::class, 'id_kabkota');
    }
 }

