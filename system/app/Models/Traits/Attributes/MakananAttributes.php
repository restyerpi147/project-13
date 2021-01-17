<?php
namespace App\Models\Traits\Attributes;
Use App\Models\User;




 trait MakananAttributes{
    
	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	    }
 }

