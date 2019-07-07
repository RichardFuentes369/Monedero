<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    protected $table = "movements";
    
    protected $fillable = ['movement','description','current_date','current_time','user_id'];
}
