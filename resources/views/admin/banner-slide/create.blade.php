@extends('layouts.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="d-flex justify-content-between mb-3">
            <h1 class="h3 d-inline align-middle">Create a banner slide.</h1>
            <a href="{{ url('admin/banner-slides/') }}" class="btn btn-info">View banner slides</a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            Form here
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')
<script>
    // document.addEventListener("DOMContentLoaded", function() {
    //     var editor = new Quill("#quill-editor", {
    //         modules: {
    //             toolbar: "#quill-toolbar"
    //         },
    //         placeholder: "Description",
    //         theme: "snow"
    //     });

    //     $('#image').on('change',function(e){
    //         $('#category-image').attr('class','d-block mt-3');
    //         $('#category-image').attr('src',URL.createObjectURL(event.target.files[0]));
    //     });

    //     $('form').on('submit',function(e){
    //         const DEFAULT_DESCRRIPTION_VALUE = "<p><br></p>";
    //         if($('.ql-editor').html() === DEFAULT_DESCRRIPTION_VALUE)
    //         {
    //             $('#hidden-description').val('');
    //             return;
    //         }
    //         $('#hidden-description').val($('.ql-editor').html());
    //     });

    //     //For Meta Keyword
    //     // Choices.js
    //     //new Choices(document.querySelector(".choices-multiple"));
    // });
</script>
@endsection