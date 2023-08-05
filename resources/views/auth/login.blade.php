@extends('layouts.app')

@section('content')
<section class="vh-100 bg-primary-gradient py-5">
    <div class="d-flex d-xl-flex align-items-center align-items-xl-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-12 col-xl-10">
                    <div class="card shadow-lg o-hidden border-0 my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-flex">
                                    <div class="flex-grow-1 bg-login-image border-0" style="background-image: url('https://img.freepik.com/free-vector/abstract-welcome-composition-with-flat-design_23-2147912311.jpg?w=1380&t=st=1690197504~exp=1690198104~hmac=373e0373c5251d29e4823048898f359f1db490d66eba6b9ae8f4ccfc7b8f34ac'); background-size:548px;"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h4 class="text-dark mb-4">Welcome back!</h4>
                                        </div>
                                        <form class="user" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form-control form-control-user">Email Address</label>
                                                <input type="email" id="form-control form-control-user" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required="required" autocomplete="email" autofocus />
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form-control form-control-user">{{ __('Password') }} <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span></label>
                                                <input type="password" id="pass_log_id" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required="required" autocomplete="current-password" />
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-outline-primary w-100 border-1">{{ __('Login') }}</button>
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
                                            <div>
                                                <a class="btn btn-outline-info d-block btn-user w-100 mt-3" href="{{ url('register') }}" role="button">
                                                    {{ __('Register') }}
                                                </a>
                                            </div>  
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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