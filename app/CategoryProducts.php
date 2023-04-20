<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryProducts extends Model
{
    //
    use softDeletes;

    protected $table ='category_products';
    protected $fillable = ['category_id', 'product_id'];
}
