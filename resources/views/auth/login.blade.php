@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="row flex-grow">
        <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                    <img src="{{ asset('assets/images/logo.svg') }}">
                </div>
                <h4>Portal Login</h4>
                <h6 class="font-weight-light">Masuk sebagai admin portal.</h6>
                <form class="pt-3" method="POST" action="{{ route('login.store') }}"">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="email"
                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" id="email" placeholder="Email">
                        @error('email')
                            <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="Password"
                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                            value="{{ old('password') }}">
                        @error('password')
                            <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <label class="form-check-label text-muted" for="remember_me">
                                <input type="checkbox" class="form-check-input" name="remember_me"
                                    id="remember_me">Keep me signed in
                            </label>
                        </div>
                        {{-- <a href="#" class="auth-link text-primary">Forgot
                            password?</a> --}}
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit"
                            class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                            Login
                        </button>
                    </div>
                    {{-- <div class="mb-2 d-grid gap-2">
                        <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                            <i class="mdi mdi-facebook me-2"></i>Connect using facebook
                        </button>
                    </div> --}}
                    {{-- <div class="text-center mt-4 font-weight-light"> Don't have an
                        account? <a href="register.html" class="text-primary">Create</a>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
@endsection
