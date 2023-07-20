@extends('layouts.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        @if (session('status'))
        <div class="alert alert-info mb-5 p-4">
            {{ session('status') }}
        </div>
        @endif

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">View all posts.</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatables-reponsive" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->category->name }}</td>
                                    <td>{{ $post->name }}</td>
                                    <td>{{ $post->slug }}</td>
                                    <td>
                                        <img src="{{ asset($post->image) }}" alt="HTML" width="50" height="50">
                                    </td>
                                    <td>{{ $post->status==1?'Enabled':'Disabled' }}</td>
                                    <td>
                                        <div class="input-group">
                                            <button type="button" class="btn dropdown-toggle"
                                                data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ url('admin/posts/'.$post->id.'/edit') }}">Edit</a>
                                                <a class="dropdown-item deleteCategoryButton" href=""
                                                    id="{{ $post->id }}" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Datatables Responsive
        $("#datatables-reponsive").DataTable({
            responsive: true
        });
    });
</script>
@endsection