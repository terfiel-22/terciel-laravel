<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorPagesController extends Controller
{
        // Dashboard
    public function analytics()
    {
        return view('author.dashboard.analytics');
    }
    public function ecommerce()
    {
        return view('author.dashboard.e-commerce');
    }
    public function crypto()
    {
        return view('author.dashboard.crypto');
    }
    // End Dashboard

    // Pages
    public function settings()
    {
        return view('author.pages.settings');
    }
    public function projects()
    {
        return view('author.pages.projects');
    }
    public function clients()
    {
        return view('author.pages.clients');
    }
    public function orders()
    {
        return view('author.pages.orders');
    }
    public function pricing()
    {
        return view('author.pages.pricing');
    }
    public function chats()
    {
        return view('author.pages.chats');
    }
    public function blank()
    {
        return view('author.pages.blank');
    }
    // End Pages

    public function profile()
    {
        return view('author.profile');
    }

    public function invoice()
    {
        return view('author.invoice');
    }

    public function tasks()
    {
        return view('author.tasks');
    }

    public function calendar()
    {
        return view('author.calendar');
    }
}
