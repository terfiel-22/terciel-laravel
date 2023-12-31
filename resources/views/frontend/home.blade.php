@extends('layouts.frontend')

@section('content')

{{-- Banner --}}
<section>
    <div class="swiffy-slider slider-item-nogap slider-item-ratio slider-item-nosnap-touch slider-nav-square slider-nav-dark slider-nav-sm slider-nav-page slider-nav-autoplay slider-nav-autopause slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-nav-animation-slow"
        id="animatedText">

        <ul class="slider-container" id="container1">
            @forelse ($bannerSlides as $bannerSlide)
            <li id="{{ $bannerSlide->id }}" class="">
                <div>
                    <img src="{{ asset($bannerSlide->image) }}" alt="..." loading="lazy" class="w-100">
                </div>
                <div class="w-100 d-flex flex-column justify-content-between position-absolute bottom-0"
                    id="image-text-container">
                    <h1
                        class="display-1 text-dark custom-animated-text position-absolute top-50 start-50 translate-middle">
                        {{ $bannerSlide->title }}
                    </h1>
                </div>
                <a href="{{ url('admin/banner-slides/'.$bannerSlide->id.'/edit') }}"></a>
            </li>
            @empty

            @endforelse
        </ul>

        <button type="button" class="slider-nav" aria-label="Go to previous"></button>
        <button type="button" class="slider-nav slider-nav-next" aria-label="Go to next"></button>

        <div class="slider-indicators">
            @foreach ($bannerSlides as $bannerSlide)
            <button aria-label="Go to slide" class="active"></button>
            @endforeach
        </div>
    </div>
</section>

<main class="content">
    <div class="container-fluid p-0">

        {{-- Featured Posts --}}
        <div
            class="swiffy-slider slider-item-show2 slider-item-reveal slider-nav-outside slider-nav-chevron slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein">
            <ul class="slider-container p-4 bg-light">
                @foreach ($featuredPosts as $post_item)
                <li>
                    <div class="shadow">
                        <div class="bg-image ratio ratio-1x1">
                            <img src="{{ asset($post_item->image) }}" class="h-100 img-thumbnail" loading="lazy"
                                alt="...">
                        </div>
                        <div class="w-100 d-flex flex-column justify-content-between position-absolute bottom-0"
                            id="image-text-container">
                            <a href="{{ url('blog/'.$post_item->category->slug.'/'.$post_item->slug) }}"
                                class="text-decoration-none">
                                <div class="p-3">
                                    <h2 id="image-text">{{ $post_item->name }}</h2>
                                    <div class="text-muted">
                                        <span data-feather="user" class="me-2"></span>{{ $post_item->author->name }}
                                        <br>
                                        <span data-feather="calendar" class="me-2"></span>{{ $post_item->created_at
                                        }}
                                        <br>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>

            <button type="button" class="slider-nav" aria-label="Go left"></button>
            <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>
        </div>

        {{-- Other Posts --}}
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="row row-cols-lg-2 g-3">
                    @forelse ($latestPosts as $post_item)
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
                                    <div class="col-lg-5">
                                        <div class="ratio ratio-4x3">
                                            <img src="{{ asset($olderPost->image) }}" alt="{{ $olderPost->name }}"
                                                class="rounded img-thumbnail">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
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