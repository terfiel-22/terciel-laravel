<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BannerSlideController extends Controller
{
    public function index()
    {
        return view('admin.banner-slide.index');
    }
    public function create()
    {
        return view('admin.banner-slide.create');
    }

    public function store()
    {
        
    }

    public function edit()
    {
        return view('admin.banner-slide.edit');
    }

    public function update()
    {
        
    }

    public function destroy()
    {
        
    }
}
