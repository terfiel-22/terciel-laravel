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
                    <div class="card shadow h-100">
                        <div class="ratio ratio-16x9">
                            <img src="{{ asset($post_item->image) }}" class="card-img-top" loading="lazy" alt="...">
                        </div>
                        <div class="card-body p-3 d-flex flex-column justify-content-between">
                            <div>
                                <h2>{{ $post_item->name }}</h2>
                                <p><span data-feather="user" class="me-2"></span>{{ $post_item->author->name }}</p>
                                <p><span data-feather="clock" class="me-2"></span>{{ $post_item->created_at }}</p>
                            </div>
                            <a href="{{ url('blog/'.$post_item->category->slug.'/'.$post_item->slug) }}"
                                class="btn btn-danger p-3">READ</a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>

            <button type="button" class="slider-nav" aria-label="Go left"></button>
            <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>
        </div>
    </div>

    {{-- <div
        class="swiffy-slider slider-nav-round slider-nav-animation slider-nav-animation-fadein slider-item-first-visible">
        <ul class="slider-container">
            <li class="slide-visible">
                <div class="card rounded-0 h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-6 col-xl-5 d-flex align-items-center p-2 p-md-3 p-xl-5">
                            <div class="card-body p-1 p-md-3 p-xl-5">
                                <p class="lead">Why use this slider</p>
                                <h2 class="card-title" style="color:#DF1E1E;">Swiffy Slider Benefits</h2>
                                <p class="card-text mt-3">Super fast lightweight slider and carousel with amazing touch
                                    support and user experience.</p>
                                <p>Super simple setup using just markup and few powerful configuration options</p>
                                <p class="card-text"><small class="text-muted">Remember to check out on mobile</small>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-7">
                            <img src="../assets/img/photos/img1.webp" class="card-img d-none d-md-block" loading="lazy"
                                style="height: 100%; object-fit: cover;" alt="...">
                            <img src="../assets/img/photos/img1.webp" class="card-img d-block d-md-none" loading="lazy"
                                style="width: 100%; object-fit: cover;" alt="...">
                        </div>
                    </div>
                </div>
            </li>
            <li class="">
                <div class="card rounded-0 h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-6 col-xl-7">
                            <img src="../assets/img/photos/img2.webp" class="card-img d-none d-md-block" loading="lazy"
                                style="height: 100%; object-fit: cover" alt="...">
                            <img src="../assets/img/photos/img2.webp" class="card-img d-block d-md-none" loading="lazy"
                                style="width: 100%; object-fit: cover" alt="...">
                        </div>
                        <div class="col-md-6 col-xl-5 d-flex align-items-center p-2 p-md-3 p-xl-5">
                            <div class="card-body p-1 p-md-3 p-xl-5">
                                <p class="lead">Dreaming about cars</p>
                                <h2 class="card-title" style="color:#DF1E1E;">Vintage cars from another era</h2>
                                <p class="card-text mt-3">First, there’s the design of the car itself. Classic cars were
                                    created very much in an analogue world where designers used pencil and paper to
                                    create elegant shapes and flowing lines that would just not be possible
                                    on the computer-based design software used by modern car designers.</p>
                                <p class="card-text"><small class="text-muted">Handcrafted like good code</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="card rounded-0 h-100 text-white">
                    <img src="https://c4.wallpaperflare.com/wallpaper/862/49/164/ultrawide-artwork-event-horizon-black-holes-midjourney-ai-hd-wallpaper-preview.jpg"
                        class="card-img h-100" style="max-height: 100%; max-width: 100%; object-fit: cover" alt="...">
                    <div
                        class="card-img-overlay d-flex align-items-start align-items-md-center justify-content-center flex-column">
                        <h2 class="card-title h1 d-block d-md-inline-block">The Aston Martin DB5</h2>
                        <p class="card-text lead col-md-8 col-lg-6 text-dark">The Aston Martin DB5 is a British luxury
                            grand
                            tourer (GT) that was made by Aston Martin and designed by the Italian coachbuilder
                            Carrozzeria Touring Superleggera. </p>
                    </div>
                </div>
            </li>
        </ul>

        <button type="button" class="slider-nav" aria-label="Go left"></button>
        <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>

        <div class="slider-indicators">
            <button class="active" aria-label="Go to slide"></button>
            <button aria-label="Go to slide" class=""></button>
            <button aria-label="Go to slide"></button>
        </div>
    </div> --}}
</section>

<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @forelse ($featuredPosts as $post_item)
                    <div class="col-lg-6 mb-5">
                        <div class="card shadow h-100">
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