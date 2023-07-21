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
                    <h2>Popular Posts</h2>
                    <hr>
                </div>

                <div class="mb-5">
                    <h2>Recent Posts</h2>
                    <hr>
                    @foreach ($category->posts as $post)
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <img src="{{ asset($post->image) }}" alt="{{ $post->name }}" class="img-thumbnail">
                        </div>
                        <div class="col-lg-6">
                            <a href="#" class="text-primary">{{ $post->name }}</a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="mb-5">
                    <h2>Tags</h2>
                    <hr>
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