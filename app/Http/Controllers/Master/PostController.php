<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('master.post.index');
    }

    public function create()
    {
        return view('master.post.create');
    }
}
