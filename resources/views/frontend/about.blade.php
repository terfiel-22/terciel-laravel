@extends('layouts.frontend')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1>About</h1>
        </div>

        <div class="row">
            <div class="col-lg-8 mb-5">
                <img src="{{ asset('images/default-about.jpg') }}" alt="Writing" class="img-thumbnail mb-2">
                <h2 class="mb-2">Terciel Blog| Blogging For Passion</h2>
                <p>
                    This is a blog and content management system,You can easily setup your blog and customize it
                    according
                    to your needs.It is easy to use and manage.Multiple users can signup and be able contribute
                    content.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris
                    nisi ut
                    aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.
                </p>

                <hr>
            </div>
            <div class="col-lg-4">
                <div class="mb-5">
                    <h2>Categories</h2>
                    <hr>
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            @forelse ($categories as $category_item)
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    {{ $category_item->name }}
                                    <span class="badge bg-danger rounded-pill">
                                        {{ $category_item->posts()->count() }}
                                    </span>
                                </div>
                            </li>
                            @empty
                            <h4 class="text-muted">No available category.</h4>
                            @endforelse
                        </ul>
                    </div>
                </div>

                <div class="mb-5">
                    <h2>Older Posts</h2>
                    <hr>
                    <ul class="list-unstyled">
                        @forelse ($olderPosts as $olderPost)
                        <li>
                            <a href="{{ url('blog/'.$olderPost->category->slug.'/'.$olderPost->slug) }}"
                                class="text-decoration-none">
                                <div class="row mb-4">
                                    <div class="col-lg-7">
                                        <div class="ratio ratio-4x3">
                                            <img src="{{ asset($olderPost->image) }}" alt="{{ $olderPost->name }}"
                                                class="rounded img-thumbnail">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <h4>{{ $olderPost->name }}</h4>
                                        <p class="text-muted">
                                            <span data-feather="user" class="me-1"></span>
                                            {{ $olderPost->author->name }} <br>
                                            <span data-feather="calendar" class="me-1"></span>
                                            {{ $olderPost->created_at }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @empty
                        <h4 class="text-muted">No available post.</h4>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection