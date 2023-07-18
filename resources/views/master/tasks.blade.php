@extends('layouts.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <a href="#" class="btn btn-primary float-end mt-n1"><i class="fas fa-plus"></i> New task</a>
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Tasks</h1><a class="badge bg-primary ms-2"
                href="https://adminkit.io/pricing/" target="_blank">Pro
                Component <i class="fas fa-fw fa-external-link-alt"></i></a>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <div class="dropdown position-relative">
                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">Backlog</h5>
                        <h6 class="card-subtitle text-muted">Nam pretium turpis et arcu. Duis arcu.</h6>
                    </div>
                    <div class="card-body">

                        <div id="tasks-backlog" style="min-height:50px;">
                            <div class="card mb-3 bg-light cursor-grab border">
                                <div class="card-body p-3">
                                    <div class="float-end me-n2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input" checked>
                                            <span class="form-check-label d-none">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo.
                                        Maecenas malesuada.</p>
                                    <div class="float-end mt-n1">
                                        <img src="{{ asset('images/avatars/avatar.jpg') }}" width="32" height="32"
                                            class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab border">
                                <div class="card-body p-3">
                                    <div class="float-end me-n2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input" checked>
                                            <span class="form-check-label d-none">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec,
                                        imperdiet iaculis, ipsum.</p>
                                    <div class="float-end mt-n1">
                                        <img src="{{ asset('images/avatars/avatar-2.jpg') }}" width="32" height="32"
                                            class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab border">
                                <div class="card-body p-3">
                                    <div class="float-end me-n2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <span class="form-check-label d-none">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu
                                        sollicitudin urna dolor sagittis.</p>
                                    <div class="float-end mt-n1">
                                        <img src="{{ asset('images/avatars/avatar-3.jpg') }}" width="32" height="32"
                                            class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab border">
                                <div class="card-body p-3">
                                    <div class="float-end me-n2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <span class="form-check-label d-none">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis.
                                        Curabitur a felis tristique.
                                    </p>
                                    <div class="float-end mt-n1">
                                        <img src="{{ asset('images/avatars/avatar-4.jpg') }}" width="32" height="32"
                                            class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab border">
                                <div class="card-body p-3">
                                    <div class="float-end me-n2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <span class="form-check-label d-none">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec,
                                        imperdiet iaculis, ipsum.</p>
                                    <div class="float-end mt-n1">
                                        <img src="{{ asset('images/avatars/avatar-2.jpg') }}" width="32" height="32"
                                            class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid">
                            <a href="#" class="btn btn-primary">Add new task</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <div class="dropdown position-relative">
                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">In Progress</h5>
                        <h6 class="card-subtitle text-muted">Nam pretium turpis et arcu. Duis arcu.</h6>
                    </div>
                    <div class="card-body">

                        <div id="tasks-progress" style="min-height:50px;">
                            <div class="card mb-3 bg-light cursor-grab border">
                                <div class="card-body p-3">
                                    <div class="float-end me-n2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <span class="form-check-label d-none">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo.
                                        Maecenas malesuada.</p>
                                    <div class="float-end mt-n1">
                                        <img src="{{ asset('images/avatars/avatar.jpg') }}" width="32" height="32"
                                            class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab border">
                                <div class="card-body p-3">
                                    <div class="float-end me-n2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <span class="form-check-label d-none">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu
                                        sollicitudin urna dolor sagittis.</p>
                                    <div class="float-end mt-n1">
                                        <img src="{{ asset('images/avatars/avatar-3.jpg') }}" width="32" height="32"
                                            class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab border">
                                <div class="card-body p-3">
                                    <div class="float-end me-n2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <span class="form-check-label d-none">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec,
                                        imperdiet iaculis, ipsum.</p>
                                    <div class="float-end mt-n1">
                                        <img src="{{ asset('images/avatars/avatar-2.jpg') }}" width="32" height="32"
                                            class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid">
                            <a href="#" class="btn btn-primary">Add new task</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <div class="dropdown position-relative">
                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title">Completed</h5>
                        <h6 class="card-subtitle text-muted">Nam pretium turpis et arcu. Duis arcu.</h6>
                    </div>
                    <div class="card-body">

                        <div id="tasks-completed" style="min-height:50px;">
                            <div class="card mb-3 bg-light cursor-grab border">
                                <div class="card-body p-3">
                                    <div class="float-end me-n2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <span class="form-check-label d-none">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec,
                                        imperdiet iaculis, ipsum.</p>
                                    <div class="float-end mt-n1">
                                        <img src="{{ asset('images/avatars/avatar-2.jpg') }}" width="32" height="32"
                                            class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab border">
                                <div class="card-body p-3">
                                    <div class="float-end me-n2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <span class="form-check-label d-none">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis.
                                        Curabitur a felis tristique.
                                    </p>
                                    <div class="float-end mt-n1">
                                        <img src="{{ asset('images/avatars/avatar-4.jpg') }}" width="32" height="32"
                                            class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab border">
                                <div class="card-body p-3">
                                    <div class="float-end me-n2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <span class="form-check-label d-none">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu
                                        sollicitudin urna dolor sagittis.</p>
                                    <div class="float-end mt-n1">
                                        <img src="{{ asset('images/avatars/avatar-3.jpg') }}" width="32" height="32"
                                            class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab border">
                                <div class="card-body p-3">
                                    <div class="float-end me-n2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <span class="form-check-label d-none">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo.
                                        Maecenas malesuada.</p>
                                    <div class="float-end mt-n1">
                                        <img src="{{ asset('images/avatars/avatar.jpg') }}" width="32" height="32"
                                            class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                            <div class="card mb-3 bg-light cursor-grab border">
                                <div class="card-body p-3">
                                    <div class="float-end me-n2">
                                        <label class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <span class="form-check-label d-none">Checkbox</span>
                                        </label>
                                    </div>
                                    <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu
                                        sollicitudin urna dolor sagittis.</p>
                                    <div class="float-end mt-n1">
                                        <img src="{{ asset('images/avatars/avatar-3.jpg') }}" width="32" height="32"
                                            class="rounded-circle" alt="Avatar">
                                    </div>
                                    <a class="btn btn-primary btn-sm" href="#">View</a>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid">
                            <a href="#" class="btn btn-primary">Add new task</a>
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
        dragula([
            document.querySelector("#tasks-backlog"),
            document.querySelector("#tasks-progress"),
            document.querySelector("#tasks-completed")
        ]);
    });
</script>
@endsection