<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function incomplete(){
        return static::where('complected',0)->get();
    }
    //
}
