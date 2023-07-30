<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WebSettingUpdateRequest;
use App\Models\WebSetting;
use App\Services\ImageUploadService;

class SettingController extends Controller
{
    private ImageUploadService $imageUploadService;
    public function __construct(ImageUploadService $imageUploadService)
    {
        $this->imageUploadService = $imageUploadService;
    }
    public function websiteSettings()
    {
        $webSetting = WebSetting::query()->where('id','1')->first();
        return view('admin.settings.website')->with('webSetting',$webSetting);
    }
    public function websiteSettingsUpdate(WebSettingUpdateRequest $request)
    {
        $data = $request->validated();

        $webSetting = WebSetting::query()->where('id','1')->first();

        $folderName = "websetting";
        if($webSetting)
        {
            if($request->hasFile("icon"))
            {
                $data["icon"] = $this->imageUploadService->upload($folderName, $request->icon,$webSetting->icon);
            } else 
            {
                $data["icon"] = $webSetting->icon;
            }
            $webSetting->update($data);
        } else 
        {
            if($request->hasFile("icon"))
            {
                $data["icon"] = $this->imageUploadService->upload($folderName, $request->icon);
            }
            WebSetting::create($data);
        }

        return redirect('admin/settings/website')->with('status','The website was updated successfully.');
    }
}
