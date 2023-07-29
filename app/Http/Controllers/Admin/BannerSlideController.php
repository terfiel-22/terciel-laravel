<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannerSlideStoreRequest;
use App\Models\BannerSlide;
use App\Services\ImageUploadService;
use Illuminate\Support\Facades\File;

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

    public function edit(BannerSlide $bannerSlide)
    {
        return view('admin.banner-slide.edit')->with('bannerSlide',$bannerSlide);
    }

    public function update()
    {
        
    }

    public function destroy(BannerSlide $bannerSlide)
    {
        if (File::exists($bannerSlide->image)) {
            File::delete($bannerSlide->image);
        }

        $bannerSlide->delete();

        return redirect('admin/banner-slides/')->with('status','The banner slide was deleted successfully.');
    }
}
