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
                    <form class="d-none d-sm-inline-block w-100">
                        <div class="input-group input-group-navbar">
                            <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
                            <button class="btn" type="button">
                                <i data-feather="search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="mb-5">
                    <h2>Related Post</h2>
                    <hr>
                    <ul class="list-unstyled">
                        @forelse ($post->category->posts as $relatedPost)
                        <li>
                            <a href="{{ url('blog/'.$relatedPost->category->slug.'/'.$relatedPost->slug) }}"
                                class="text-decoration-none">
                                <div class="row mb-4">
                                    <div class="col-lg-7">
                                        <img src="{{ asset($relatedPost->image) }}" alt="{{ $relatedPost->name }}"
                                            class="img-fluid rounded">
                                    </div>
                                    <div class="col-lg-5">
                                        <h4>{{ $relatedPost->name }}</h4>
                                        <p class="text-muted">{{ $relatedPost->created_at }}</p>
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