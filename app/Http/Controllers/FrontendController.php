<?php

namespace App\Http\Controllers;

use App\Models\Category;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function viewCategory($category_slug)
    {
        $category = Category::query()->where('slug',$category_slug)->where('status','1')->first();

        if($category)
        {
            $posts = $category->posts()->paginate(5);
            $popularPosts = $category->posts()->limit(3)->get();
            return view('frontend.category.view',compact('category','posts','popularPosts'));
        }
        return view('errors.404');
    }

    public function viewPost($category_slug, $post_slug)
    {
        $category = Category::query()->where('slug',$category_slug)->where('status','1')->first();

        if($category)
        {
            $post = $category->posts()->where('slug',$post_slug)->where('status','1')->first();
            $latestPosts = $category->posts()->latest()->limit(3)->get();
            if($post)
                return view('frontend.category.post.view',compact('post','latestPosts'));
        }

        return view('errors.404');
    }
}
