<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function analytics()
    {
        return view('master.analytics');
    }

    public function profile()
    {
        return view('master.profile.index');
    }
    public function profileSettings()
    {
        return view('master.profile.settings');
    }

    public function chats()
    {
        return view('master.chats');
    }

    public function tasks()
    {
        return view('master.tasks');
    }
    public function calendar()
    {
        return view('master.calendar');
    }
}
