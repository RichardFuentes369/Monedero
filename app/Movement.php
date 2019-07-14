<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{    
    protected $fillable = ['id','movement','description','current_date','current_time','rode','id_user'];
}
