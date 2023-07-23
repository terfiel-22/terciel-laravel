@extends('layouts.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="d-flex justify-content-between mb-3">
            <h1 class="h3 d-inline align-middle">Create a post.</h1>
            <a href="{{ url('master/posts/') }}" class="btn btn-info">View posts</a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            <form method="POST" action="{{ url('master/posts') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Category</label>
                                    <select class="form-select" name="category_id">
                                        <option hidden selected value="">Select a category...</option>
                                        @foreach ($categories as $category)
                                        <option value=" {{ $category->id }}" {{ old('category_id')==$category->
                                            id?'selected':'' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                                        value="{{ old('name') }}">
                                    @error('name')
                                    <span class=" invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Slug</label>
                                    <input type="text" name="slug"
                                        class="form-control @error('slug') is-invalid @enderror" placeholder="Slug"
                                        value="{{ old('slug') }}">
                                    @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    @include('layouts.inc.quill-toolbar')
                                    <div id="quill-editor">{!! old('description') !!}</div>
                                    <input type="hidden" name="description" id="hidden-description"
                                        class="form-control @error('description') is-invalid @enderror">
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label w-100">Image</label>
                                    <input type="file" name="image"
                                        class="form-control @error('image') is-invalid @enderror" id="image">
                                    <img src="" alt="Invalid image." width="100" height="100" id="post-image"
                                        class="d-none">
                                    <p class="form-text text-muted">Upload post image.</p>
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Meta Title</label>
                                    <input type="text" name="meta_title"
                                        class="form-control @error('meta_title') is-invalid @enderror"
                                        placeholder="Meta Title" value="{{ old('meta_title') }}">
                                    @error('meta_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Meta Description</label>
                                    <textarea name="meta_description"
                                        class="form-control @error('meta_description') is-invalid @enderror"
                                        placeholder="Meta Description" rows="3">{{ old('meta_description') }}</textarea>
                                    @error('meta_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {{-- Future Meta Keyword UI --}}
                                {{-- <div class="mb-3">
                                    <label class="form-label">Meta Keywords</label>
                                    <select class="form-control @error('email') is-invalid @enderror choices-multiple"
                                        multiple>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">West Virginia</option>
                                        </optgroup>
                                    </select>
                                </div> --}}
                                <div class="mb-3">
                                    <label class="form-label">Meta Keyword</label>
                                    <textarea name="meta_keyword"
                                        class="form-control @error('meta_keyword') is-invalid @enderror"
                                        placeholder="Meta Keyword" rows="3">{{ old('meta_keyword') }}</textarea>
                                    @error('meta_keyword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                @if (Auth::user()->role == 1)
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input name="status" class="form-check-input" type="checkbox" id="status" {{
                                            old('status')=="on" ?'checked':'' }}>
                                        <label class="form-check-label" for="status">Enable Posts</label>
                                    </div>
                                </div>
                                @endif
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
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
    document.addEventListener("DOMContentLoaded", function() {
        var editor = new Quill("#quill-editor", {
            modules: {
                toolbar: "#quill-toolbar"
            },
            placeholder: "Description",
            theme: "snow"
        });

        $('#image').on('change',function(e){
            $('#post-image').attr('class','d-block mt-3');
            $('#post-image').attr('src',URL.createObjectURL(event.target.files[0]));
        });

        $('form').on('submit',function(e){
            const DEFAULT_DESCRRIPTION_VALUE = "<p><br></p>";
            if($('.ql-editor').html() === DEFAULT_DESCRRIPTION_VALUE)
            {
                $('#hidden-description').val('');
                return;
            }
            $('#hidden-description').val($('.ql-editor').html());
        });

        //For Meta Keyword
        // Choices.js
        //new Choices(document.querySelector(".choices-multiple"));
    });
</script>
@endsection