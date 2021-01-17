<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelurahan;
use App\Models\Provinsi;


 class Ibukota extends Model {
   
    protected $table = 'ibukota';
    
    function kelurahan(){
        return $this->hasMany(Kelurahan::class,'id_kelurahan');
    }

    function provinsi(){
        return $this->belongsTo(Provinsi::class, 'id_propinsi');
    }
 }