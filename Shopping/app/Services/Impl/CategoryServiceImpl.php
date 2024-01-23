<?php

namespace App\Services\Impl;

use App\Models\Category;
use App\Services\ICategoryService;

class CategoryServiceImpl implements ICategoryService {
    public function getCategories() {
        return Category::all();
    }

}
