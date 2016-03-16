<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodPreference extends Model
{
    public function guests()
    {
        return $this->hasMany('App\Guest');
    }
}
