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
                        Display here
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('modal-form')
{{-- <form class="d-inline" method="POST" id="deleteCategoryForm">
    @csrf
    @method("DELETE")
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        Are you sure you want to delete this category?
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Delete</button>
    </div>
</form> --}}
@endsection

@section('scripts')
<script>
    // document.addEventListener("DOMContentLoaded", function () {
    //     // Datatables Responsive
    //     $("#datatables-reponsive").DataTable({
    //         responsive: true
    //     });

    //     $(document).on('click','.deleteCategoryButton',function(e){
    //         e.preventDefault();
    //         var category_id = $(this).attr('id');
    //         $('#deleteCategoryForm').attr('action', 'categories/'+category_id);
    //     });
    // });
</script>
@endsection