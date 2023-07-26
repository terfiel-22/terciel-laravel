@extends('layouts.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="d-flex justify-content-between mb-3">
            <h1 class="h3 d-inline align-middle">Website Settings</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            <form method="POST" action="{{ url('admin/settings/website/update') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Website Name</label>
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
                                    <label class="form-label w-100">Website Icon</label>
                                    <input type="file" name="icon"
                                        class="form-control @error('icon') is-invalid @enderror" id="icon">
                                    <img src="" alt="Invalid icon." width="100" height="100" id="website-icon"
                                        class="d-none">
                                    <p class="form-text text-muted">Upload icon with svg extension.</p>
                                    @error('icon')
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
                                <button type="submit" class="btn btn-primary">Save</button>
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
@endsection