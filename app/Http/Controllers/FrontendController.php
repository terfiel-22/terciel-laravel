<?php

namespace App\Http\Controllers;

use App\Models\BannerSlide;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $bannerSlides = BannerSlide::all();
        $categories = Category::query()->where('status','1')->get();
        $featuredPosts = Post::query()->where('featured','1')->where('status','1')->latest()->limit(6)->get();
        $latestPosts = Post::query()->where('status','1')->latest()->paginate(6);
        $olderPosts = Post::query()->where('status','1')->oldest()->limit(4)->get();
        return view('frontend.home',compact('bannerSlides','categories','featuredPosts','latestPosts','olderPosts'));
    }

    public function viewAbout()
    {
        $categories = Category::query()->where('status','1')->get();
        $olderPosts = Post::query()->where('status','1')->oldest()->limit(4)->get();
        return view('frontend.about',compact('categories','olderPosts'));
    }

    public function viewContact()
    {
        return view('frontend.contact');
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
        
        abort(404);
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

        abort(404);
    }

    public function viewSearchResult(Request $request)
    {
        $keyword = $request->input('keyword');

        $posts = Post::query()
            ->where(function($query) use ($keyword){
                $query->where('meta_title', 'LIKE', "%{$keyword}%")
                    ->orWhere('meta_description', 'LIKE', "%{$keyword}%")
                    ->orWhere('meta_keyword', 'LIKE', "%{$keyword}%");
            })
            ->where('status','1')
            ->latest()
            ->paginate(5);

        $popularPosts = Post::query()->where('status','1')->limit(3)->get();

        return view('frontend.search-result', compact('keyword','posts','popularPosts'));
    }
}
