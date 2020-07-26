<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Shop extends Model
{
    public function group()
    {
        return $this->belongsTo('App\Models\Group');
        
    }
}
