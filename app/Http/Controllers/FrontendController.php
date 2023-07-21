<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function viewCategory($category_slug)
    {
        $category = Category::query()->where('slug',$category_slug)->where('status','1')->first();
        return view('frontend.category.index')->with('category',$category);
    }
}
