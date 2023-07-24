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
        class="swiffy-slider slider-item-show5 slider-item-nogap slider-item-ratio slider-item-ratio-1x1 slider-item-snapstart slider-item-nosnap-touch slider-nav-square slider-nav-dark slider-nav-sm slider-nav-visible slider-nav-outside slider-nav-page slider-nav-animation slider-nav-animation-fadein slider-nav-animation-slow">
        <ul class="slider-container">
            <li class="slide-visible">
                <div class="px-1" id="slide1">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/photos/unsplash-2.jpg') }}" alt="Unsplash">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Card 1 with image and button</h5>
                        </div>
                    </div>
                </div>
            </li>
            <li class="slide-visible">
                <div class="px-1" id="slide2">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/photos/unsplash-2.jpg') }}" alt="Unsplash">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Card 2 with image and button</h5>
                        </div>
                    </div>
                </div>
            </li>
            <li class="slide-visible">
                <div class="px-1" id="slide3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/photos/unsplash-2.jpg') }}" alt="Unsplash">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Card 3 with image and button</h5>
                        </div>
                    </div>
                </div>
            </li>
            <li class="slide-visible">
                <div class="px-1" id="slide4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/photos/unsplash-2.jpg') }}" alt="Unsplash">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Card 4 with image and button</h5>
                        </div>
                    </div>
                </div>
            </li>
            <li class="slide-visible">
                <div class="px-1" id="slide5">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/photos/unsplash-2.jpg') }}" alt="Unsplash">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Card 5 with image and button</h5>
                        </div>
                    </div>
                </div>
            </li>
            <li class="">
                <div class="px-1" id="slide6">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/photos/unsplash-2.jpg') }}" alt="Unsplash">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Card 6 with image and button</h5>
                        </div>
                    </div>
                </div>
            </li>
            <li class="">
                <div class="px-1" id="slide7">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/photos/unsplash-2.jpg') }}" alt="Unsplash">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Card 7 with image and button</h5>
                        </div>
                    </div>
                </div>
            </li>
            <li class="">
                <div class="px-1" id="slide8">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/photos/unsplash-2.jpg') }}" alt="Unsplash">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Card 8 with image and button</h5>
                        </div>
                    </div>
                </div>
            </li>
            <li class="">
                <div class="px-1" id="slide9">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/photos/unsplash-2.jpg') }}" alt="Unsplash">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Card 9 with image and button</h5>
                        </div>
                    </div>
                </div>
            </li>
            <li class="">
                <div class="px-1" id="slide10">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/photos/unsplash-2.jpg') }}" alt="Unsplash">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Card 10 with image and button</h5>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <button type="button" class="slider-nav"></button>
        <button type="button" class="slider-nav slider-nav-next"></button>
    </div>
</section>
<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Landing Page</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Display Categories</p>
            </div>
        </div>
    </div>
</main>
@endsection