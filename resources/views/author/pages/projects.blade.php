@extends('layouts.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <a href="#" class="btn btn-primary float-end mt-n1"><i class="fas fa-plus"></i> New project</a>
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Projects</h1><a class="badge bg-primary ms-2"
                href="https://adminkit.io/pricing/" target="_blank">Pro Component <i
                    class="fas fa-fw fa-external-link-alt"></i></a>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">

                    <div class="card-header px-4 pt-4">
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
                        <h5 class="card-title mb-0">Landing page redesign</h5>
                        <div class="badge bg-success my-2">Finished</div>
                    </div>
                    <div class="card-body px-4 pt-2">
                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit
                            amet adipiscing sem neque
                            sed ipsum.</p>

                        <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                        <img src="{{ asset('images/avatars/avatar-2.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                        <img src="{{ asset('images/avatars/avatar.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-4 pb-4">
                            <p class="mb-2 font-weight-bold">Progress <span class="float-end">100%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 100%;">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">

                    <div class="card-header px-4 pt-4">
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
                        <h5 class="card-title mb-0">Company posters</h5>
                        <div class="badge bg-warning my-2">In progress</div>
                    </div>
                    <div class="card-body px-4 pt-2">
                        <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas
                            malesuada. Praesent congue erat
                            at massa.</p>

                        <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                        <img src="{{ asset('images/avatars/avatar-2.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                        <img src="{{ asset('images/avatars/avatar.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-4 pb-4">
                            <p class="mb-2 font-weight-bold">Progress <span class="float-end">75%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 75%;">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">

                    <div class="card-header px-4 pt-4">
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
                        <h5 class="card-title mb-0">Product page design</h5>
                        <div class="badge bg-success my-2">Finished</div>
                    </div>
                    <div class="card-body px-4 pt-2">
                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit
                            amet adipiscing sem neque
                            sed ipsum.</p>

                        <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                        <img src="{{ asset('images/avatars/avatar-2.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                        <img src="{{ asset('images/avatars/avatar.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-4 pb-4">
                            <p class="mb-2 font-weight-bold">Progress <span class="float-end">100%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 100%;">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">

                    <div class="card-header px-4 pt-4">
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
                        <h5 class="card-title mb-0">Upgrade CRM software</h5>
                        <div class="badge bg-warning my-2">In progress</div>
                    </div>
                    <div class="card-body px-4 pt-2">
                        <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet
                            iaculis, ipsum. Sed aliquam
                            ultrices mauris.</p>

                        <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                        <img src="{{ asset('images/avatars/avatar-2.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                        <img src="{{ asset('images/avatars/avatar.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-4 pb-4">
                            <p class="mb-2 font-weight-bold">Progress <span class="float-end">50%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 50%;">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">

                    <img class="card-img-top" src="{{ asset('images/photos/unsplash-1.jpg') }}" alt="Unsplash">

                    <div class="card-header px-4 pt-4">
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
                        <h5 class="card-title mb-0">Fix form validation</h5>
                        <div class="badge bg-warning my-2">In progress</div>
                    </div>
                    <div class="card-body px-4 pt-2">
                        <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet
                            iaculis, ipsum. Sed aliquam
                            ultrices mauris.</p>

                        <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                        <img src="{{ asset('images/avatars/avatar-2.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                        <img src="{{ asset('images/avatars/avatar.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-4 pb-4">
                            <p class="mb-2 font-weight-bold">Progress <span class="float-end">65%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 65%;">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">

                    <img class="card-img-top" src="{{ asset('images/photos/unsplash-2.jpg') }}" alt="Unsplash">

                    <div class="card-header px-4 pt-4">
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
                        <h5 class="card-title mb-0">New company logo</h5>
                        <div class="badge bg-danger my-2">On hold</div>
                    </div>
                    <div class="card-body px-4 pt-2">
                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit
                            amet adipiscing sem neque
                            sed ipsum.</p>

                        <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                        <img src="{{ asset('images/avatars/avatar-2.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                        <img src="{{ asset('images/avatars/avatar.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-4 pb-4">
                            <p class="mb-2 font-weight-bold">Progress <span class="float-end">20%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 20%;">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">

                    <img class="card-img-top" src="{{ asset('images/photos/unsplash-3.jpg') }}" alt="Unsplash">

                    <div class="card-header px-4 pt-4">
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
                        <h5 class="card-title mb-0">Upgrade to latest Maps API</h5>
                        <div class="badge bg-success my-2">Finished</div>
                    </div>
                    <div class="card-body px-4 pt-2">
                        <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet
                            iaculis, ipsum. Sed aliquam
                            ultrices mauris.</p>

                        <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                        <img src="{{ asset('images/avatars/avatar-2.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                        <img src="{{ asset('images/avatars/avatar.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-4 pb-4">
                            <p class="mb-2 font-weight-bold">Progress <span class="float-end">100%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 100%;">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card">

                    <img class="card-img-top" src="{{ asset('images/photos/unsplash-1.jpg') }}" alt="Unsplash">

                    <div class="card-header px-4 pt-4">
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
                        <h5 class="card-title mb-0">Refactor backend templates</h5>
                        <div class="badge bg-danger my-2">On hold</div>
                    </div>
                    <div class="card-body px-4 pt-2">
                        <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas
                            malesuada. Praesent congue erat
                            at massa.</p>

                        <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                        <img src="{{ asset('images/avatars/avatar-2.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                        <img src="{{ asset('images/avatars/avatar.jpg') }}" class="rounded-circle me-1" alt="Avatar"
                            width="28" height="28">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-4 pb-4">
                            <p class="mb-2 font-weight-bold">Progress <span class="float-end">0%</span></p>
                            <div class="progress progress-sm">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 0%;">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection