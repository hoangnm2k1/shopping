<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductFrontendController extends Controller {
    public function indexProducts() {
        $new_products = Product::latest('updated_at')->take(5)->get();
        $f_products = Product::take(5)->get();
        return view('frontend.index', compact('new_products', 'f_products'));
    }

}
