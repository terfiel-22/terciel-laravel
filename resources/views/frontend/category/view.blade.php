@extends('layouts.frontend')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1><span class="text-muted">Category:</span> {{ $category->name }}</h1>
        </div>
        <hr />
        <div class="row py-4">
            <div class="col-lg-8 mb-5">
                <div class="row row-cols-lg-2 g-3">
                    @forelse ($posts as $post_item)
                    <a href="{{ url('blog/'.$post_item->category->slug.'/'.$post_item->slug) }}"
                        class="text-decoration-none text-dark mb-4">
                        <div class="col">
                            <div class="shadow p-3 card">
                                <div class="ratio ratio-4x3 mb-2">
                                    <img class="img-thumbnail h-100" src="{{ asset($post_item->image) }}"
                                        alt="{{ $post_item->name }}">
                                </div>
                                <div class="mb-2">
                                    <h2>{{ $post_item->name }}</h2>
                                </div>
                                <div class="text-muted">
                                    <span data-feather="user" class="me-2"></span>{{ $post_item->author->name }} <br>
                                    <span data-feather="calendar" class="me-2"></span>{{ $post_item->created_at }} <br>
                                    <span data-feather="tag" class="me-2"></span>
                                    @php
                                    $tags = explode(' ',$post_item->meta_keyword)
                                    @endphp
                                    @foreach ($tags as $tag)
                                    <span class="badge bg-info">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </a>
                    @empty
                    <h4 class="text-muted">No available post.</h4>
                    @endforelse
                </div>
                {{-- <div class="mb-5">
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
                    <h2 class="text-muted">No available post.</h2>
                    @endforelse
                </div> --}}
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
                                        <div class="ratio ratio-4x3">
                                            <img src="{{ asset($popularPost->image) }}" alt="{{ $popularPost->name }}"
                                                class="rounded img-thumbnail">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <h4>{{ $popularPost->name }}</h4>
                                        <p class="text-muted">
                                            <span data-feather="user" class="me-1"></span>
                                            {{ $popularPost->author->name }} <br>
                                            <span data-feather="calendar" class="me-1"></span>
                                            {{ $popularPost->created_at }}
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

                <div class="mb-5">
                    <h2>Tags</h2>
                    <hr>
                    <div class="mb-1">
                        @php
                        $tags = explode(' ',$category->meta_keyword)
                        @endphp
                        @foreach ($tags as $tag)
                        <span class="badge bg-info">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection