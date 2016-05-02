<?php

namespace App\Core\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function pictures()
    {
        return $this->hasMany('App\Core\Picture\Picture');
    }
}
