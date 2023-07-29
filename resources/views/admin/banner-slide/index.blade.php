@extends('layouts.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        @if (session('status'))
        <div class="alert alert-info mb-5 p-4">
            {{ session('status') }}
        </div>
        @endif

        <div class="d-flex justify-content-between mb-3">
            <h1 class="h3 d-inline align-middle">View all banners.</h1>
            <a href="{{ url('admin/banner-slides/create') }}" class="btn btn-info">Add slide</a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <section>
                            <div class="swiffy-slider slider-item-nogap slider-item-ratio slider-item-nosnap-touch slider-nav-square slider-nav-dark slider-nav-sm slider-nav-page slider-nav-autoplay slider-nav-autopause slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-nav-animation-slow"
                                id="animatedText">

                                <ul class="slider-container" id="container1">
                                    @forelse ($bannerSlides as $bannerSlide)
                                    <li id="{{ $bannerSlide->id }}" class="">
                                        <div>
                                            <img src="{{ asset($bannerSlide->image) }}" alt="..." loading="lazy"
                                                class="w-100">
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
                                <button type="button" class="slider-nav slider-nav-next"
                                    aria-label="Go to next"></button>

                                <div class="slider-indicators">
                                    @foreach ($bannerSlides as $bannerSlide)
                                    <button aria-label="Go to slide" class="active"></button>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                        <p class="text-muted">Click the slide to edit.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</main>
@endsection