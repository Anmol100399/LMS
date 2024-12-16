<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public  function courses(){
        return $this->hasMany(Courses::class);
    }
}
