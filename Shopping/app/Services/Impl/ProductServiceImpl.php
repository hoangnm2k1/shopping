<?php

namespace App\Services\Impl;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Services\IProductService;

class ProductServiceImpl implements IProductService{

    public function getAllProducts(){
        return Product::all();
    }

    public function addProduct(ProductRequest $request) {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;

        $file = $request->image;

        $file_extension = $file->getClientOriginalExtension(); //Lấy đuôi file của file tải lên
        $file_name = 'image_' . uniqid() . '.' . $file_extension; //uniquid tạo chuỗi random
        $file->move(public_path('dashboard/uploads'), $file_name); //lưu ảnh vô public/uploads
        $request->merge(['image' => $file_name]);   //request->image = $file_name
        $product->img_url = $file_name;

        $product->category_id = $request->category_id;

        $product->save();
        return Product::all();
    }

    public function getProductById($id)
    {
        return Product::where('id', $id)->first();
    }

    public function editProduct(ProductRequest $request ,$id)
    {
        $productUpdate = Product::find($id);

        $productUpdate->name = $request->name;
        $productUpdate->price = $request->price;
        $productUpdate->category_id = $request->category_id;
        $productUpdate->img_url = $request->image;

        $file = $request->image;
        $file_extension = $file->getClientOriginalExtension();
        $file_name = 'image_' . uniqid() . '.' . $file_extension;
        $file->move(public_path('dashboard/uploads'), $file_name);
        $request->merge(['image' => $file_name]);

        $productUpdate->img_url = $file_name;

        $productUpdate->save();
    }
    public function delProduct($id) {
        $productDelete = Product::find($id);
        $productDelete->delete();
    }
}
