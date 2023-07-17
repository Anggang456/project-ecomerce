@extends('layouts.app')

@section('content')
<section class="vh-100 bg-primary-gradient">
    <div class="d-flex d-xl-flex align-items-center align-items-xl-center" style="width: 100%;height: 100%;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-12 col-xl-10">
                    <div class="card shadow-lg o-hidden border-0 my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-flex">
                                    <div class="flex-grow-1 bg-login-image rounded" style="background-image: url('https://img.freepik.com/free-vector/gradient-minimalist-background_23-2149974328.jpg?w=2000&t=st=1687761266~exp=1687761866~hmac=9d3e9e055301fcf07ec03a8eef394cc08f2711b548e2c3a8ae2e0857becdf7d2');"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h4 class="text-dark mb-4">Welcome back!</h4>
                                        </div>
                                        <form class="user" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <!-- Email input -->
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form-control form-control-user">Email Address</label>
                                                <input type="email" id="form-control form-control-user" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required="required" autocomplete="email" autofocus />
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>

                                            <!-- Password input -->
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form-control form-control-user">{{ __('Password') }} <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span></label>
                                                <input type="password" id="myInput" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required="required" autocomplete="current-password" />
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>


                                            <!-- Submit button -->
                                            <button type="submit" class="btn btn-outline-primary w-100" style="border-radius: 5px;">{{ __('Login') }}</button>
                                            <div class="text-center">
                                                @if (Route::has('password.request'))
                                                <a class="btn btn-link mt-1" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                                @endif
                                            </div>


                                            <div class="text-center mt-1">
                                                <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                                            </div>

                                            <a class="btn btn-outline-secondary d-block btn-user w-100 mt-3" style="border-radius: 5px;" href="{{ url('register') }}" role="button">
                                                {{ __('Register') }}
                                            </a>

                                        </form>
                                    </div>
                                </div>
                            </div>
</section>
@endsection