<?php


namespace App\Services;

use App\Http\Requests\ProductRequest;

interface IProductService{
    public function getAllProducts();
    public function addProduct(ProductRequest $request);
    public function getProductById($id);
    public function editProduct(ProductRequest $request ,$id);
    public function delProduct($id);

}
