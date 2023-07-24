@extends('layouts.frontend')

@section('content')
<main>
    <div
        class="swiffy-slider slider-item-ratio slider-item-ratio-2x1 slider-item-snapstart slider-item-nosnap-touch slider-nav-square slider-nav-dark slider-nav-sm slider-nav-touch slider-nav-page slider-nav-autoplay slider-nav-autopause slider-indicators-highlight slider-nav-animation slider-nav-animation-fadein slider-nav-animation-slow">
        <ul class="slider-container">
            <li id="slide1"><img src="https://swiffyslider.com/assets/img/photos/img1.webp" alt="..." loading="lazy">
            </li>
            <li id="slide2"><img src="https://swiffyslider.com/assets/img/photos/img2.webp" alt="..." loading="lazy">
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