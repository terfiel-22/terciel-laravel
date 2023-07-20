<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        return view('master.post.index');
    }

    public function create()
    {
        $categories = Category::query()->where('status','1')->get();
        return view('master.post.create')->with('categories',$categories);
    }
}
