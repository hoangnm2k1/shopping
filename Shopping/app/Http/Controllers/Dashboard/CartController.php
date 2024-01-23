<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showProduct() {
        $products = Product::all();
        return view('dashboard.customer.index', compact('products'));
    }

    public function addToCartProduct(Request $request) {
        $productId = $request->input('hidden_id');
        $product = Product::find($productId);

        // Kiểm tra và khởi tạo session cart nếu chưa tồn tại
        if (!$request->session()->has('cart')) {
            $request->session()->put('cart', []);
        }

        $cart = $request->session()->get('cart');
        $cart[$productId] = $product;
        $request->session()->put('cart', $cart);

        return view('dashboard.customer.cart', compact('cart'));
    }
}
