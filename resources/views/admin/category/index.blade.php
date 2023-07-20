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
            <h1 class="h3 d-inline align-middle">View all categories.</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatables-reponsive" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Image</th>
                                    <th>Visibility</th>
                                    <th>Status</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        <img src="{{ asset($category->image) }}" alt="HTML" width="50" height="50">
                                    </td>
                                    <td>{{ $category->display_on_navbar==1?'Visible':'Hidden' }}</td>
                                    <td>{{ $category->status==1?'Enabled':'Disabled' }}</td>
                                    <td>
                                        <div class="input-group">
                                            <button type="button" class="btn dropdown-toggle"
                                                data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#edit">Edit</a>
                                                <a class="dropdown-item" href="#delete">Delete</a>
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