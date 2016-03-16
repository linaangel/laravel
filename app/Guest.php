<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    public function shoeSize()
    {
        return $this->hasOne('App\ShoeSize');
    }
    public function foodPreference()
    {
        return $this->hasOne('App\FoodPreference');
    }
	public function categorie()
    {
        return $this->hasOne('App\Categorie');
    }
    public function desk()
    {
        return $this->hasOne('App\Desk');
    }
}
