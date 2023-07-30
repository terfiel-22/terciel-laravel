@extends('layouts.frontend')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1>{{ $post->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('blog/'.$post->category->slug) }}">{{
                            $post->category->name }}</a></li>
                    <li class="breadcrumb-item active">{{ $post->name }}</li>
                </ol>
            </nav>
        </div>
        <hr />
        <div class="row py-4">
            <div class="col-lg-8">
                <div class="card card-body">
                    <div class="ql-editor p-0">{!! $post->description !!}</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-5">
                    <h2>Latest Posts</h2>
                    <hr>
                    <ul class="list-unstyled">
                        @forelse ($latestPosts as $latestPost)
                        <li>
                            <a href="{{ url('blog/'.$latestPost->category->slug.'/'.$latestPost->slug) }}"
                                class="text-decoration-none">
                                <div class="row mb-4">
                                    <div class="col-lg-5">
                                        <div class="ratio ratio-4x3">
                                            <img src="{{ asset($latestPost->image) }}" alt="{{ $latestPost->name }}"
                                                class="rounded img-thumbnail">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <h4>{{ $latestPost->name }}</h4>
                                        <p class="text-muted">
                                            <span data-feather="user" class="me-1"></span>
                                            {{ $latestPost->author->name }} <br>
                                            <span data-feather="calendar" class="me-1"></span>
                                            {{ $latestPost->created_at }}
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
                        $tags = explode(' ',$post->meta_keyword)
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

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        $('.ql-editor img').attr('class','w-100');
    });
</script>
@endsection