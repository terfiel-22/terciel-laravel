@extends('layouts.frontend')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1>{{ $category->name }}</h1>
        </div>
        <hr />
        <div class="row py-4">
            <div class="col-lg-8">
                <div class="card card-body">
                    <div class="ql-editor p-0">{!! $category->description !!}</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-5">
                    <form class="d-none d-sm-inline-block">
                        <div class="input-group input-group-navbar">
                            <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
                            <button class="btn" type="button">
                                <i data-feather="search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="mb-5">
                    <h2>Popular Posts</h2>
                    <hr>
                    @foreach ($category->posts as $post)
                    <a href="#" class="text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-lg-7">
                                <img src="{{ asset($post->image) }}" alt="{{ $post->name }}" class="img-thumbnail">
                            </div>
                            <div class="col-lg-5">
                                <h4>{{ $post->name }}</h4>
                                <p class="text-muted">{{ $post->created_at }}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>

                <div class="mb-5">
                    <h2>Recent Posts</h2>
                    <hr>
                    @foreach ($category->posts as $post)
                    <a href="#" class="text-decoration-none">
                        <div class="row mb-3">
                            <div class="col-lg-7">
                                <img src="{{ asset($post->image) }}" alt="{{ $post->name }}" class="img-thumbnail">
                            </div>
                            <div class="col-lg-5">
                                <h4>{{ $post->name }}</h4>
                                <p class="text-muted">{{ $post->created_at }}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>

                <div class="mb-5">
                    <h2>Tags</h2>
                    <hr>
                    <div class="mb-1">
                        @php
                        $tags = explode(' ',$category->meta_keyword)
                        @endphp
                        @foreach ($tags as $tag)
                        <span class="badge bg-secondary">{{ $tag }}</span>
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