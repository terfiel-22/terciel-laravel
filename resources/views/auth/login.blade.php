@extends('layouts.frontend')

@section('content')
<main class="d-flex w-100 vh-100">
    <div class="container d-flex flex-column">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">Welcome back, Charles</h1>
                        <p class="lead">
                            Sign in to your account to continue
                        </p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <div class="text-center">
                                    <img src="{{ asset('images/avatars/avatar.jpg') }}" alt="Charles Hall"
                                        class="img-fluid rounded-circle" width="132" height="132" />
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            placeholder="Enter your email" name="email" value="{{ old('email') }}"
                                            required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                                            placeholder="Enter your password" name="password" required
                                            autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <small>
                                            <a href="{{ route('password.request') }}">Forgot password?</a>
                                        </small>
                                    </div>
                                    <div>
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox" value="remember-me"
                                                name="remember-me" checked>
                                            <span class="form-check-label">
                                                Remember me next time
                                            </span>
                                        </label>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        Don't have an account? <a href="{{ url('/register') }}">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection