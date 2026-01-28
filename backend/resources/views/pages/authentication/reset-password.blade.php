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
                    <h1 class="h4 font-w700 mt-30 mb-10">Reset Your Password</h1>
                    <h2 class="h5 font-w400 text-muted mb-0">Enter your new password below</h2>
                </div>
                <!-- END Header -->

                <form action="{{ url('authentication/password/reset') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="block block-themed block-rounded block-shadow">
                        <div class="block-content">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-alt-primary btn-block">
                                    <i class="si si-refresh mr-10"></i> Reset Password
                                </button>
                            </div>
                        </div>
                        <div class="block-content bg-body-light text-center">
                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ url('authentication/login') }}">
                                <i class="fa fa-angle-left mr-5"></i> Back to Login
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
