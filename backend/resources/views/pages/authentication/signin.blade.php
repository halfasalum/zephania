@extends('layouts.authentication')

@section('content')
<div class="bg-body-dark bg-pattern" style="background-image: url('assets/img/various/bg-pattern-inverse.png');">
    <div class="row mx-0 justify-content-center">
        <div class="hero-static col-lg-6 col-xl-4">
            <div class="content content-full overflow-hidden">
                <!-- Header -->
                <div class="py-30 text-center">
                    <a class="link-effect font-w700" href="/">
                        <i class="si si-fire"></i>
                        <span class="font-size-xl text-primary-dark">ABIC</span><span class="font-size-xl">ELIA</span>
                    </a>
                    <h1 class="h4 font-w700 mt-30 mb-10">Welcome to ABICELIA MANAGEMENT PANEL</h1>
                    <h2 class="h5 font-w400 text-muted mb-0">It’s a great day today!</h2>
                </div>
                <!-- END Header -->

                <!-- Sign In Form -->
                <form class="js-validation-signin" action="{{ url('authentication/login') }}" method="POST">
                    @csrf
                    <div class="block block-themed block-rounded block-shadow">
                        <div class="block-header bg-gd-dusk">
                            <h3 class="block-title">Please Sign In</h3>
                        </div>
                        <div class="block-content">
                            @if(session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <div class="form-group">
                                <label for="login-email">Email</label>
                                <input type="email" class="form-control" id="login-email" name="email" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="login-password">Password</label>
                                <input type="password" class="form-control" id="login-password" name="password" required>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="login-remember-me" name="remember">
                                    <label class="custom-control-label" for="login-remember-me">Remember Me</label>
                                </div>
                                <a class="link-effect text-muted" href="{{ url('authentication/password/reset') }}">
                                    Forgot Password?
                                </a>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-alt-primary btn-block">
                                    <i class="si si-login mr-10"></i> Sign In
                                </button>
                            </div>
                        </div>
                        <div class="block-content bg-body-light text-center">
                            <a class="link-effect text-muted" href="{{ url('authentication/register') }}">
                                <i class="fa fa-plus mr-5"></i> Create Account
                            </a>
                        </div>
                    </div>
                </form>
                <!-- END Sign In Form -->
            </div>
        </div>
    </div>
</div>
@endsection
