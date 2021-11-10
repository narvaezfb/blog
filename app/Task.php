<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //builds the query and then throw the result 
    public function scopeIncomplete($query) 
    {
        return $query->where('completed', 0)->get();
    }
    //returns all the tasks that are imcomplete
    public static function incomplete()
    {
        return static::where('completed', 0)->get();
    }
    //returns all the tasks that have been completed
    public static function complete()
    {
        return static::where('completed', 1)->get();
    }

}
