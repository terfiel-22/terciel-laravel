@extends('layouts.master')

@section('content')
@extends('layouts.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="d-flex justify-content-between mb-3">
            <h1 class="h3 d-inline align-middle">Banner Settings</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            {{-- <form method="POST" action="{{ url('admin/categories') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                                        value="{{ old('name') }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
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
                                    <img src="" alt="Invalid image." width="100" height="100" id="category-image"
                                        class="d-none">
                                    <p class="form-text text-muted">Upload category image.</p>
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
                                <div class="mb-3">
                                    <div class="form-check form-switch">
                                        <input name="display_on_navbar" class="form-check-input" type="checkbox"
                                            id="displayOnNav" {{ old('display_on_navbar')=="on" ?'checked':'' }}>
                                        <label class="form-check-label" for="displayOnNav">Display on Navigation
                                            Bar</label>
                                    </div>

                                    <div class="form-check form-switch">
                                        <input name="status" class="form-check-input" type="checkbox" id="status" {{
                                            old('status')=="on" ?'checked':'' }}>
                                        <label class="form-check-label" for="status">Enable Category</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')
@endsection
@endsection

@section('scripts')
@endsection