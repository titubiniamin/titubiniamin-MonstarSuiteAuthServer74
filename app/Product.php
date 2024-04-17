<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function subProducts()
    {
        return $this->hasMany(Product::class,'parent_id');
    }
}
