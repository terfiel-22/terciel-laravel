<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Http\Requests\Admin\CategoryUpdateRequest;
use App\Models\Category;
use App\Services\ImageUploadService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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
        $categories = Category::all();
        return view('admin.category.index')->with('categories',$categories);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryStoreRequest $request)
    {
        $data = $request->validated();

        $folderName = "category";
        $data["image"] = $this->imageUploadService->upload($folderName, $request->image);
        
        $data["display_on_navbar"] = $request->display_on_navbar == "on" ? "1" : "0";
        $data["status"] = $request->status == "on" ? "1" : "0";
        $data["slug"] = Str::slug($request->slug);
        $data["created_by"] = Auth::user()->id;
        Category::create($data);

        return redirect('admin/categories')->with('status','The category was created successfully.');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit')->with('category',$category);
    }

    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $data = $request->validated();

        $folderName = "category";
        $data["image"] = $this->imageUploadService->upload($folderName, $request->image,$category->image);
        
        $data["display_on_navbar"] = $request->display_on_navbar == "on" ? "1" : "0";
        $data["status"] = $request->status == "on" ? "1" : "0";
        $data["slug"] = Str::slug($request->slug);
        $data["created_by"] = Auth::user()->id;

        $category->update($data);
        return redirect('admin/categories')->with('status','The category was updated successfully.');
    }

    public function destroy(Category $category)
    {
        if (File::exists($category->image)) {
            File::delete($category->image);
        }

        $category->posts->each(function ($post) {
            if (File::exists($post->image)) {
                File::delete($post->image);
            }
            $post->delete();
        });
        $category->delete();
        
        return redirect('admin/categories')->with('status', 'The category was deleted successfully.');
    }
}
