<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{

    use softDeletes;
    
    protected $table ='categories';
    protected $fillable = ['name'];
}
