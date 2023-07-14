<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
        // Dashboard
        public function analytics()
        {
            return view('admin.dashboard.analytics');
        }
        public function ecommerce()
        {
            return view('admin.dashboard.e-commerce');
        }
        public function crypto()
        {
            return view('admin.dashboard.crypto');
        }
        // End Dashboard
    
        // Pages
        public function settings()
        {
            return view('admin.pages.settings');
        }
        public function projects()
        {
            return view('admin.pages.projects');
        }
        public function clients()
        {
            return view('admin.pages.clients');
        }
        public function orders()
        {
            return view('admin.pages.orders');
        }
        public function pricing()
        {
            return view('admin.pages.pricing');
        }
        public function chats()
        {
            return view('admin.pages.chats');
        }
        public function blank()
        {
            return view('admin.pages.blank');
        }
        // End Pages
    
        public function profile()
        {
            return view('admin.profile');
        }
    
        public function invoice()
        {
            return view('admin.invoice');
        }
    
        public function tasks()
        {
            return view('admin.tasks');
        }
    
        public function calendar()
        {
            return view('admin.calendar');
        }
}
