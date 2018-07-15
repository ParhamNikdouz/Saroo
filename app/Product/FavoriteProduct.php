<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;

class FavoriteProduct extends Model
{
    protected $guarded = [];
    protected $table = 'favorite_product';
}
