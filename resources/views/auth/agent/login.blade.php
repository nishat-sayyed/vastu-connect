@extends('auth.base')

@section('title', 'Agent Login')

@section('content')
    <div class="content-body">
        <section class="row flexbox-container">
            <div class="col-xl-8 col-11 d-flex justify-content-center">
                <div class="card bg-authentication rounded-0 mb-0">
                    <div class="row m-0">
                        <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                            <img src="{{ asset('images/pages/login.png') }}" alt="branding logo">
                        </div>
                        <div class="col-lg-6 col-12 p-0">
                            <div class="card rounded-0 mb-0 px-2">
                                <div class="card-header pb-1">
                                    <div class="card-title">
                                        <h4 class="mb-0">Agent Login</h4>
                                    </div>
                                </div>
                                <p class="px-2">Welcome back, please login to your account.</p>
                                <div class="card-content">
                                    <div class="card-body pt-1">
                                        <form action="{{ route('agent.login') }}" method="post">
                                            @csrf
                                            <fieldset
                                                class="form-label-group form-group position-relative has-icon-left">
                                                <input type="email" class="form-control @if($errors->has('email')) is-invalid @endif" id="user-email"
                                                       placeholder="Email" name="email" required>
                                                <div class="form-control-position">
                                                    <i class="feather icon-lock"></i>
                                                </div>
                                                <label for="user-password">Email</label>
                                                @if ($errors->has('email'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </div>
                                                @endif
                                            </fieldset>

                                            <fieldset class="form-label-group position-relative has-icon-left">
                                                <input type="password" class="form-control @if($errors->has('password')) is-invalid @endif" id="user-password"
                                                       placeholder="Password" name="password" required>
                                                <div class="form-control-position">
                                                    <i class="feather icon-lock"></i>
                                                </div>
                                                <label for="user-password">Password</label>
                                                @if ($errors->has('password'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </div>
                                                @endif
                                            </fieldset>
                                            <div class="form-group d-flex justify-content-between align-items-center">
                                                <div class="text-left">
                                                    <fieldset class="checkbox">
                                                        <div class="vs-checkbox-con vs-checkbox-primary">
                                                            <input class="form-check-input" type="checkbox"
                                                                   name="remember"
                                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                            <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                            <span class="">Remember me</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary float-right btn-inline">Login
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="login-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
