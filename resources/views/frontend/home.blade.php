@extends('layouts.frontend')

@section('content')
<section class="banner">
    <div class="swiffy-slider slider-item-nogap slider-item-ratio slider-item-nosnap-touch slider-nav-square slider-nav-dark slider-nav-sm slider-nav-page slider-nav-autoplay slider-nav-autopause slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-nav-animation-slow"
        id="animatedText">

        <ul class="slider-container" id="container1">
            <li id="slide1" class="slide-visible">
                <div>
                    <img src="https://imgv3.fotor.com/images/share/wonderland-girl-generated-by-Fotor-ai-art-generator.jpg"
                        alt="..." loading="lazy" class="w-100">
                    <h1
                        class="display-1 text-dark custom-animated-text position-absolute top-50 start-50 translate-middle">
                        Woman</h1>
                </div>
            </li>
            <li id="slide2">
                <div>
                    <img src="{{ asset('images/avatars/avatar-3.jpg') }}" alt="..." loading="lazy" class="w-100">
                    <h1
                        class="display-1 text-dark custom-animated-text position-absolute top-50 start-50 translate-middle">
                        Woman</h1>
                </div>
            </li>
            <li id="slide3">
                <div>
                    <img src="https://w0.peakpx.com/wallpaper/693/564/HD-wallpaper-empty-snowy-road-at-night.jpg"
                        alt="..." loading="lazy" class="w-100">
                    <h1
                        class="display-1 text-dark custom-animated-text position-absolute top-50 start-50 translate-middle">
                        Aston</h1>
                </div>
            </li>
            <li id="slide4">
                <div>
                    <img src="https://swiffyslider.com/assets/img/photos/img4.webp" alt="..." loading="lazy"
                        class="w-100">
                    <h1
                        class="display-1 text-dark custom-animated-text position-absolute top-50 start-50 translate-middle">
                        Mountain</h1>
                </div>
            </li>
            <li id="slide5">
                <div>
                    <img src="https://swiffyslider.com/assets/img/photos/img5.webp" alt="..." loading="lazy"
                        class="w-100">
                    <h1
                        class="display-1 text-dark custom-animated-text position-absolute top-50 start-50 translate-middle">
                        Car</h1>
                </div>
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
        </div>
    </div>

    <div class="m-5">
        <div
            class="swiffy-slider slider-item-show2 slider-item-reveal slider-nav-outside slider-nav-chevron slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein">
            <ul class="slider-container p-4 bg-light">
                @foreach ($allPosts as $post_item)
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
                                    <h2>{{ $post_item->name }}</h2>
                                    <div class="text-muted">
                                        <span data-feather="user" class="me-2"></span>{{ $post_item->author->name }}
                                        <br>
                                        <span data-feather="calendar" class="me-2"></span>{{ $post_item->created_at }}
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
    </div>
</section>

<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="row row-cols-lg-2 g-3">
                    @forelse ($featuredPosts as $post_item)
                    <a href="{{ url('blog/'.$post_item->category->slug.'/'.$post_item->slug) }}"
                        class="text-decoration-none text-dark mb-4">
                        <div class="col">
                            <div class="shadow">
                                <div class="ratio ratio-16x9 mb-2">
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
                                    <div class="col-lg-7">
                                        <div class="ratio ratio-4x3">
                                            <img src="{{ asset($olderPost->image) }}" alt="{{ $olderPost->name }}"
                                                class="rounded">
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