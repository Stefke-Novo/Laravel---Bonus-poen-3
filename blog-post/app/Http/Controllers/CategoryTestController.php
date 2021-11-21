<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryTestController extends Controller
{
    public function index()
    {
        $catgories=Category::select('name');

        return [$catgories];
    }

    public function show($id)
    {
        $category=Category::find($id);

        return $category;
    }
}
