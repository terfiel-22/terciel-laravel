@extends('layouts.frontend')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1><span class="text-muted">Search result:</h1>
        </div>
        <hr />
        <div class="row py-4">
            <div class="col-lg-8">
                <div class="mb-5 min-vh-100">
                    @forelse ($posts as $latestPost)
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <img src="{{ asset($latestPost->image) }}" alt="{{ $latestPost->name }}"
                                class="img-fluid rounded">
                        </div>
                        <div class="col-lg-8">
                            <div class="mb-2">
                                <p class="text-muted d-inline">{{ $latestPost->created_at }}</p>
                                <span class="card-title"> • {{ $latestPost->category->name }}</span>
                            </div>
                            <div class="mb-2">
                                <h2>{{ $latestPost->name }}</h2>
                                <p class="text-info text-truncate">{{ $latestPost->meta_description }}</p>
                                <a href="{{ url('blog/'.$latestPost->category->slug.'/'.$latestPost->slug) }}"
                                    class="btn btn-outline-info">Read more</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <ul class="list-unstyled">
                        <li class="text-danger">Sorry, your search for <span
                                class="text-decoration-underline fw-bold text-dark">{{
                                $keyword
                                }}</span>
                            returned zero result.</li>
                        <li class="text-muted">Try being more specific with key words.</li>
                    </ul>
                    @endforelse
                </div>
                {{ $posts->links() }}
            </div>
            <div class="col-lg-4">
                <div class="mb-5">
                    <h2>Popular Posts</h2>
                    <hr>
                    <ul class="list-unstyled">
                        @forelse ($popularPosts as $popularPost)
                        <li>
                            <a href="{{ url('blog/'.$popularPost->category->slug.'/'.$popularPost->slug) }}"
                                class="text-decoration-none">
                                <div class="row mb-4">
                                    <div class="col-lg-7">
                                        <img src="{{ asset($popularPost->image) }}" alt="{{ $popularPost->name }}"
                                            class="img-fluid rounded">
                                    </div>
                                    <div class="col-lg-5">
                                        <h4>{{ $popularPost->name }}</h4>
                                        <p class="text-muted">{{ $popularPost->created_at }}</p>
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