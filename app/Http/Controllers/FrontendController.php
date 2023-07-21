<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function viewCategory($category_slug)
    {
        $category = Category::query()->where('slug',$category_slug)->where('status','1')->first();

        if($category)
        {
            return view('frontend.category.view')->with('category',$category);
        }
        return redirect('/');
    }

    public function viewPost($category_slug, $post_slug)
    {
        $category = Category::query()->where('slug',$category_slug)->where('status','1')->first();

        if($category)
        {
            $post = Post::query()->where('category_id',$category->id)->where('slug',$post_slug)->where('status','1')->first();
            if($post)
                return view('frontend.category.post.view')->with('post',$post);
        }

        return redirect('blog/'.$category->slug);
    }
}
