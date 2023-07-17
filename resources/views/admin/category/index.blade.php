@extends('layouts.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
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
                                <tr>
                                    <td>HTML</td>
                                    <td>html-introduction</td>
                                    <td>
                                        <img src="https://i.pinimg.com/564x/b6/92/ff/b692ff3cf901603d82267313868798ee.jpg"
                                            alt="HTML" width="50" height="50">
                                    </td>
                                    <td>Visible</td>
                                    <td>Enabled</td>
                                    <td>
                                        <div class="input-group">
                                            <button type="button" class="btn dropdown-toggle p-0"
                                                data-bs-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#edit">Edit</a>
                                                <a class="dropdown-item" href="#delete">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
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