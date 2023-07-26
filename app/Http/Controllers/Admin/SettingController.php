<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function websiteSettings()
    {
        return view('admin.settings.website');
    }

    public function bannerSettings()
    {
        return view('admin.settings.banner');
    }
}
