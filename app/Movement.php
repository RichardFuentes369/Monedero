<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Movement extends Model
{    
	use SoftDeletes;
	
	protected $table = "movements";

    protected $fillable = ['movement','description','id_user'];
}