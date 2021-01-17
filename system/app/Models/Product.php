<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $guarded = [];
    use HasFactory;


protected static function boot(){
		parent::boot();

		static::creating(function($item){
			$item->uuid = (string) Str::uuid();
		});
	}
}