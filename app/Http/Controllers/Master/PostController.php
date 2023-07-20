<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\PostStoreRequest;
use App\Models\Category;
use App\Models\Post;
use App\Services\ImageUploadService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    private ImageUploadService $imageUploadService;
    public function __construct(ImageUploadService $imageUploadService)
    {
        $this->imageUploadService = $imageUploadService;
    }

    public function index()
    {
        $posts = Post::all();
        return view('master.post.index')->with('posts',$posts);
    }

    public function create()
    {
        $categories = Category::query()->where('status','1')->get();
        return view('master.post.create')->with('categories',$categories);
    }

    public function store(PostStoreRequest $request)
    {
        $data = $request->validated();

        $folderName = "post";
        $data["image"] = $this->imageUploadService->upload($folderName, $request->image);
        
        $data["display_on_navbar"] = $request->display_on_navbar == "on" ? "1" : "0";
        $data["status"] = $request->status == "on" ? "1" : "0";
        $data["slug"] = Str::slug($request->slug);
        $data["created_by"] = Auth::user()->id;
        Post::create($data);
        return redirect('master/posts')->with('status','The post was created successfully.');
    }

    public function edit(Post $post)
    {
        $categories = Category::query()->where('status','1')->get();
        return view('master.post.edit',compact('categories','post'));
    }
}
