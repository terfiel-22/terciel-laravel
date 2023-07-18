@extends('layouts.master')

@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Messages</h1><a class="badge bg-primary ms-2"
                href="https://adminkit.io/pricing/" target="_blank">Pro Component <i
                    class="fas fa-fw fa-external-link-alt"></i></a>
        </div>

        <div class="card">
            <div class="row g-0">
                <div class="col-12 col-lg-5 col-xl-3 border-end list-group">

                    <div class="px-4 d-none d-md-block">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <input type="text" class="form-control my-3" placeholder="Search...">
                            </div>
                        </div>
                    </div>

                    <a href="#" class="list-group-item list-group-item-action border-0">
                        <div class="badge bg-success float-end">5</div>
                        <div class="d-flex align-items-start">
                            <img src="{{ asset('images/avatars/avatar-5.jpg') }}" class="rounded-circle me-1"
                                alt="Vanessa Tucker" width="40" height="40">
                            <div class="flex-grow-1 ms-3">
                                Vanessa Tucker
                                <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-0">
                        <div class="badge bg-success float-end">2</div>
                        <div class="d-flex align-items-start">
                            <img src="{{ asset('images/avatars/avatar-2.jpg') }}" class="rounded-circle me-1"
                                alt="William Harris" width="40" height="40">
                            <div class="flex-grow-1 ms-3">
                                William Harris
                                <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-0">
                        <div class="d-flex align-items-start">
                            <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1"
                                alt="Sharon Lessman" width="40" height="40">
                            <div class="flex-grow-1 ms-3">
                                Sharon Lessman
                                <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-0">
                        <div class="d-flex align-items-start">
                            <img src="{{ asset('images/avatars/avatar-4.jpg') }}" class="rounded-circle me-1"
                                alt="Christina Mason" width="40" height="40">
                            <div class="flex-grow-1 ms-3">
                                Christina Mason
                                <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-0">
                        <div class="d-flex align-items-start">
                            <img src="{{ asset('images/avatars/avatar-5.jpg') }}" class="rounded-circle me-1"
                                alt="Fiona Green" width="40" height="40">
                            <div class="flex-grow-1 ms-3">
                                Fiona Green
                                <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-0">
                        <div class="d-flex align-items-start">
                            <img src="{{ asset('images/avatars/avatar-2.jpg') }}" class="rounded-circle me-1"
                                alt="Doris Wilder" width="40" height="40">
                            <div class="flex-grow-1 ms-3">
                                Doris Wilder
                                <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-0">
                        <div class="d-flex align-items-start">
                            <img src="{{ asset('images/avatars/avatar-4.jpg') }}" class="rounded-circle me-1"
                                alt="Haley Kennedy" width="40" height="40">
                            <div class="flex-grow-1 ms-3">
                                Haley Kennedy
                                <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action border-0">
                        <div class="d-flex align-items-start">
                            <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1"
                                alt="Jennifer Chang" width="40" height="40">
                            <div class="flex-grow-1 ms-3">
                                Jennifer Chang
                                <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                            </div>
                        </div>
                    </a>

                    <hr class="d-block d-lg-none mt-1 mb-0" />
                </div>
                <div class="col-12 col-lg-7 col-xl-9">
                    <div class="py-2 px-4 border-bottom d-none d-lg-block">
                        <div class="d-flex align-items-center py-1">
                            <div class="position-relative">
                                <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1"
                                    alt="Sharon Lessman" width="40" height="40">
                            </div>
                            <div class="flex-grow-1 ps-3">
                                <strong>Sharon Lessman</strong>
                                <div class="text-muted small"><em>Typing...</em></div>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-lg me-1 px-3"><i class="feather-lg"
                                        data-feather="phone"></i></button>
                                <button class="btn btn-info btn-lg me-1 px-3 d-none d-md-inline-block"><i
                                        class="feather-lg" data-feather="video"></i></button>
                                <button class="btn btn-light border btn-lg px-3"><i class="feather-lg"
                                        data-feather="more-horizontal"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="position-relative">
                        <div class="chat-messages p-4">

                            <div class="chat-message-right pb-4">
                                <div>
                                    <img src="{{ asset('') }}images/avatars/avatar.jpg" class="rounded-circle me-1"
                                        alt="Chris Wood" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">2:33 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 me-3">
                                    <div class="font-weight-bold mb-1">You</div>
                                    Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                </div>
                            </div>

                            <div class="chat-message-left pb-4">
                                <div>
                                    <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1"
                                        alt="Sharon Lessman" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">2:34 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                    <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                    Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                </div>
                            </div>

                            <div class="chat-message-right mb-4">
                                <div>
                                    <img src="{{ asset('') }}images/avatars/avatar.jpg" class="rounded-circle me-1"
                                        alt="Chris Wood" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">2:35 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 me-3">
                                    <div class="font-weight-bold mb-1">You</div>
                                    Cum ea graeci tractatos.
                                </div>
                            </div>

                            <div class="chat-message-left pb-4">
                                <div>
                                    <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1"
                                        alt="Sharon Lessman" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">2:36 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                    <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                    Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae
                                    commodo lectus mauris et velit.
                                    Proin ultricies placerat imperdiet. Morbi varius quam ac venenatis tempus.
                                </div>
                            </div>

                            <div class="chat-message-left pb-4">
                                <div>
                                    <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1"
                                        alt="Sharon Lessman" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">2:37 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                    <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                    Cras pulvinar, sapien id vehicula aliquet, diam velit elementum orci.
                                </div>
                            </div>

                            <div class="chat-message-right mb-4">
                                <div>
                                    <img src="{{ asset('') }}images/avatars/avatar.jpg" class="rounded-circle me-1"
                                        alt="Chris Wood" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">2:38 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 me-3">
                                    <div class="font-weight-bold mb-1">You</div>
                                    Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                </div>
                            </div>

                            <div class="chat-message-left pb-4">
                                <div>
                                    <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1"
                                        alt="Sharon Lessman" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">2:39 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                    <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                    Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                </div>
                            </div>

                            <div class="chat-message-right mb-4">
                                <div>
                                    <img src="{{ asset('') }}images/avatars/avatar.jpg" class="rounded-circle me-1"
                                        alt="Chris Wood" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">2:40 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 me-3">
                                    <div class="font-weight-bold mb-1">You</div>
                                    Cum ea graeci tractatos.
                                </div>
                            </div>

                            <div class="chat-message-right mb-4">
                                <div>
                                    <img src="{{ asset('') }}images/avatars/avatar.jpg" class="rounded-circle me-1"
                                        alt="Chris Wood" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">2:41 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 me-3">
                                    <div class="font-weight-bold mb-1">You</div>
                                    Morbi finibus, lorem id placerat ullamcorper, nunc enim ultrices massa, id dignissim
                                    metus urna eget purus.
                                </div>
                            </div>

                            <div class="chat-message-left pb-4">
                                <div>
                                    <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1"
                                        alt="Sharon Lessman" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">2:42 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                    <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                    Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae
                                    commodo lectus mauris et velit.
                                    Proin ultricies placerat imperdiet. Morbi varius quam ac venenatis tempus.
                                </div>
                            </div>

                            <div class="chat-message-right mb-4">
                                <div>
                                    <img src="{{ asset('') }}images/avatars/avatar.jpg" class="rounded-circle me-1"
                                        alt="Chris Wood" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">2:43 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 me-3">
                                    <div class="font-weight-bold mb-1">You</div>
                                    Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                </div>
                            </div>

                            <div class="chat-message-left pb-4">
                                <div>
                                    <img src="{{ asset('images/avatars/avatar-3.jpg') }}" class="rounded-circle me-1"
                                        alt="Sharon Lessman" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">2:44 am</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ms-3">
                                    <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                    Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="flex-grow-0 py-3 px-4 border-top">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type your message">
                            <button class="btn btn-primary">Send</button>
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
    // Chat
    document.addEventListener("DOMContentLoaded", function() {
        var chatMessagesElement = document.querySelector(".chat-messages");
        chatMessagesElement.scrollTop = chatMessagesElement.scrollHeight;
    });
</script>
@endsection