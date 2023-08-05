@extends('layouts.app')

@section('content')
<section class="vh-100 bg-primary-gradient">
    <div class="container" style="position: absolute;left: 0;right: 0;top: 50%;transform: translateY(-50%);-ms-transform: translateY(-50%);-moz-transform: translateY(-50%);-webkit-transform: translateY(-50%);-o-transform: translateY(-50%);">
        <div class="row d-flex d-xl-flex justify-content-center justify-content-xl-center">
            <div class="col-sm-12 col-lg-10 col-xl-9 col-xxl-7 bg-white shadow-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h4 class="text-dark mb-4">Create an Account!</h4>
                    </div>
                    <form class="user" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="form-control form-control-user">{{ __('Username') }}</label>
                            <input type="name" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="name" autofocus />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="form-control form-control-user">{{ __('Email Address') }}</label>
                            <input type="email" id="form-control form-control-user" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required="required" placeholder="Email" autocomplete="email" autofocus="autofocus" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0"><label class="form-label" for="pass_log_id">{{ __('Password') }} <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></label>
                                <input type="password" id="pass_log_id" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required="required" placeholder="Password" autocomplete="current-password" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="pass_log_id">{{ __('Confirm Password') }}</label>
                                <input type="password" id="pass_log_id" class="form-control form-control-user" name="password_confirmation" placeholder="Verify Password" required autocomplete="new-password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-info w-100 border-1">{{ __('Register') }}</button>

                        <div class="text-center mt-3">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                        </div>

                        <a class="btn btn-outline-primary w-100 mt-3 border-1" href="{{ url('login') }}" role="button">
                            {{ __('Login') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
</section>
<script>
        $(document).on('click', '.toggle-password', function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $("#pass_log_id");
            input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
        });
    </script>
@endsection