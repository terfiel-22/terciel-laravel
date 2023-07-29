<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannerSlideStoreRequest;
use App\Models\BannerSlide;
use App\Services\ImageUploadService;

class BannerSlideController extends Controller
{
    private ImageUploadService $imageUploadService;
    public function __construct(ImageUploadService $imageUploadService)
    {
        $this->imageUploadService = $imageUploadService;
    }

    public function index()
    {
        $bannerSlides = BannerSlide::all();
        return view('admin.banner-slide.index')->with('bannerSlides',$bannerSlides);
    }
    public function create()
    {
        return view('admin.banner-slide.create');
    }

    public function store(BannerSlideStoreRequest $request)
    {
        $data = $request->validated();
        $folderName = "banner-slide";
        $data["image"] = $this->imageUploadService->upload($folderName, $request->image);
        BannerSlide::create($data);
        return redirect('admin/banner-slides/')->with('status','The banner slide was added successfully.');
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
