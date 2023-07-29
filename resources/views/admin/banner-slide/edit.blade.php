@extends('layouts.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="d-flex justify-content-between mb-3">
            <h1 class="h3 d-inline align-middle">Update a banner slide.</h1>
            <a href="{{ url('admin/banner-slides/') }}" class="btn btn-info">View banner slides</a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            <form method="POST" action="{{ url('admin/banner-slides/'.$bannerSlide->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" id="title"
                                        class="form-control @error('title') is-invalid @enderror" placeholder="Title"
                                        value="{{ old('title')??$bannerSlide->title }}">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label w-100">Image</label>
                                    <input type="file" name="image" id="image"
                                        class="form-control @error('image') is-invalid @enderror">
                                    <p class="form-text text-muted">Upload banner slide image.</p>
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-between mb-3">
            <h1 class="h3 d-inline align-middle">Output</h1>
            <button class="btn btn-danger deleteBannerSlideButton" id="{{ $bannerSlide->id }}" data-bs-toggle="modal"
                data-bs-target="#deleteModal">Delete</button>
        </div>
        <div class="swiffy-slider slider-item-nogap slider-item-ratio slider-item-nosnap-touch slider-nav-square slider-nav-dark slider-nav-sm slider-nav-page slider-nav-autoplay slider-nav-autopause slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-nav-animation-slow"
            id="animatedText">
            <ul class="slider-container" id="container1">
                <li id="slide1" class="slide-visible">
                    <div>
                        <img src="{{ asset($bannerSlide->image) }}" alt="..." loading="lazy" class="w-100"
                            id="banner-image">
                    </div>
                    <div class="w-100 d-flex flex-column justify-content-between position-absolute bottom-0"
                        id="image-text-container">
                        <h1 class="display-1 text-dark custom-animated-text position-absolute top-50 start-50 translate-middle"
                            id="banner-text">
                            {{ $bannerSlide->title }}
                        </h1>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</main>
@endsection

@section('modal-form')
<form class="d-inline" method="POST" id="deleteBannerSlideForm">
    @csrf
    @method("DELETE")
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete banner slide</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        Are you sure you want to delete this banner slide?
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Delete</button>
    </div>
</form>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        $('#title').on('change',function(e){
            $('#banner-text').html($(this).val());
        });
        $('#image').on('change',function(e){
            $('#banner-image').attr('src',URL.createObjectURL(event.target.files[0]));
        });

        $(document).on('click','.deleteBannerSlideButton',function(e){
            e.preventDefault();
            var banner_slide_id = $(this).attr('id');
            $('#deleteBannerSlideForm').attr('action', '../'+banner_slide_id);
        });
    });
</script>
@endsection