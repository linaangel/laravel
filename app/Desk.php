<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
    public function categorie()
    {
        return $this->hasOne('App\Categorie');
    }
    public function guests()
    {
        return $this->hasMany('App\Guest');
    }
}
