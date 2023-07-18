<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('author.post.index');
    }

    public function create()
    {
        return view('author.post.create');
    }
}
