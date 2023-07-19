<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Models\Category;
use App\Services\ImageUploadService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    private ImageUploadService $imageUploadService;
    public function __construct(ImageUploadService $imageUploadService)
    {
        $this->imageUploadService = $imageUploadService;
    }

    public function index()
    {
        return view('admin.category.index');
    }

    public function store(CategoryStoreRequest $request)
    {
        $data = $request->validated();

        $publicPath = "uploads/images/category/";
        $data["image"] = $this->imageUploadService->upload($publicPath, $request->image);
        
        $data["display_on_navbar"] = $request->display_on_navbar == "on" ? "1" : "0";
        $data["status"] = $request->status == "on" ? "1" : "0";
        $data["slug"] = Str::slug($request->slug);
        $data["created_by"] = Auth::user()->id;
        Category::create($data);

        return redirect('admin/categories')->with('status','Category was successfully created.');
    }

    public function create()
    {
        return view('admin.category.create');
    }
}
