@extends('layouts.frontend')

@section('content')
<main>
    <div
        class="swiffy-slider slider-item-ratio slider-item-ratio-2x1 slider-item-nogap slider-item-nosnap-touch slider-nav-square slider-nav-dark slider-nav-sm slider-nav-page slider-nav-autoplay slider-nav-autopause slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-nav-animation-slow">
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
    <div class="content">
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
    </div>
</main>
@endsection