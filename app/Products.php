<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    //
    use softDeletes;

    protected $table ='products';
    protected $fillable = ['name', 'slug', 'price', 'special_price', 'special_price_from', 'special_price_to', 'is_active'];
}
