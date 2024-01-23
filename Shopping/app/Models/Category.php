<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // table: categorys
    public function products(){
        return $this->hasMany('App\Models\Product');
    }
}
