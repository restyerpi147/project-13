<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ibukota;


 class Provinsi extends Model {
   
    protected $table = 'provinsi';

    function ibukota(){
        return $this->hasMany(Ibukota::class,'id_propinsi');
    }
 }
 
