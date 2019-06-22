@extends('layouts.loginlayout')

@section('content')
<div class="admin_login_form_container fix">
    <div class="admin_login_form_header fix">{{ __('MEMBER LOGIN') }}</div>

    <div class="admin_login_form_body fix">
        <form method="POST" action="{{ route('login.submit') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="admin_login_form_left fix">{{ __('E-Mail Address :') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="admin_login_form_right fix" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="admin_login_form_left fix">{{ __('Password :') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="admin_login_form_right fix" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn_admin_login fix">
                                    {{ __('Login') }}
                    </button>

                </div>
            </div>
        </form>
    </div>
</div>
@endsection
