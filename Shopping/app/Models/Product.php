<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // tên bảng: tương ứng: products
    // protected $table = 'sanpham';
    // protected $primaryKey = 'email';
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
