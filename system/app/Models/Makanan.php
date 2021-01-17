<?php 

namespace App\Models;
use App\Models\Traits\Attributes\MakananAttributes;
use App\Models\Traits\Relations\MakananRelations;


/**
 * 
 */
class Makanan extends Model
{
	use MakananAttributes, MakananRelations;
	protected $table = 'makanan';
	protected $guard = [];


}