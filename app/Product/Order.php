<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    protected $table = 'order_product';
}
