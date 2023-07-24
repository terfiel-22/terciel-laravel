@extends('layouts.frontend')

@section('content')
<section class="banner">
    <div
        class="swiffy-slider slider-item-ratio slider-item-ratio-2x1 slider-item-nogap slider-item-nosnap-touch slider-nav-square slider-nav-dark slider-nav-sm slider-nav-page slider-nav-autoplay slider-nav-autopause slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-nav-animation-slow mb-5">
        <ul class="slider-container">
            <li id="slide1" class="bg-image">
                <img src="https://swiffyslider.com/assets/img/photos/img1.webp" class="w-100" />
                <div class="mask text-light d-flex justify-content-center flex-column text-start image-text-container">
                    <div class="col-8 ms-4">
                        <h1 class="image-text">Create a lifestyle you desire.</h1>
                    </div>
                </div>
            </li>
            <li id="slide1" class="bg-image">
                <img src="https://swiffyslider.com/assets/img/photos/img2.webp" class="w-100" />
                <div class="mask text-light d-flex justify-content-center flex-column text-start image-text-container">
                    <div class="col-9 ms-4">
                        <h1 class="image-text">Engaging purposeful and creative.</h1>
                    </div>
                </div>
            </li>
            <li id="slide3"><img src="https://swiffyslider.com/assets/img/photos/img3.webp" alt="..." loading="lazy">
            </li>
            <li id="slide4"><img src="https://swiffyslider.com/assets/img/photos/img4.webp" alt="..." loading="lazy">
            </li>
            <li id="slide5"><img src="https://swiffyslider.com/assets/img/photos/img5.webp" alt="..." loading="lazy">
            </li>
            <li id="slide6"><img src="https://swiffyslider.com/assets/img/photos/img6.webp" alt="..." loading="lazy">
            </li>
        </ul>

        <button type="button" class="slider-nav" aria-label="Go to previous"></button>
        <button type="button" class="slider-nav slider-nav-next" aria-label="Go to next"></button>

        <div class="slider-indicators">
            <button aria-label="Go to slide" class="active"></button>
            <button aria-label="Go to slide"></button>
            <button aria-label="Go to slide"></button>
            <button aria-label="Go to slide"></button>
            <button aria-label="Go to slide"></button>
            <button aria-label="Go to slide"></button>
        </div>
    </div>
    <div
        class="swiffy-slider slider-item-show5 slider-item-nogap slider-item-ratio slider-item-ratio-1x1 slider-item-snapstart slider-item-nosnap-touch slider-nav-square slider-nav-dark slider-nav-sm slider-nav-visible slider-nav-page slider-nav-animation slider-nav-animation-fadein slider-nav-animation-slow">
        <ul class="slider-container">
            @foreach ($allPosts as $post_item)
            <li>
                <div class="px-1" id="slide1">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset($post_item->image) }}" alt="Unsplash">
                        <div class="card-header">
                            <h5 class="card-title mb-0">{{ $post_item->name }}</h5>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>

        <button type="button" class="slider-nav"></button>
        <button type="button" class="slider-nav slider-nav-next"></button>
    </div>
</section>
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @forelse ($featuredPosts as $post_item)
                    <div class="col-lg-6">
                        <div class="card">
                            <img class="card-img-top" src="{{ $post_item->image }}" alt="{{ $post_item->name }}">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Card with image and button</h5>
                            </div>
                        </div>
                    </div>
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
                                    <div class="col-lg-7">
                                        <img src="{{ asset($olderPost->image) }}" alt="{{ $olderPost->name }}"
                                            class="img-fluid rounded">
                                    </div>
                                    <div class="col-lg-5">
                                        <h4>{{ $olderPost->name }}</h4>
                                        <p class="text-muted">{{ $olderPost->created_at }}</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @empty
                        <h4 class="text-muted">No available post.</h4>
                        @endforelse
                    </ul>
                </div>
                {{-- <div class="mb-5">
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
                </div> --}}
            </div>
        </div>
    </div>
</main>
@endsection