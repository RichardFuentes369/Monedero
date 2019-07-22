<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{    
	protected $table = "movements";
    
    protected $fillable = ['movement','description','id_user'];
}