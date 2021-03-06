@extends('layouts.auth')

@section('content')
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span>  JOSTED <span class="tx-normal">]</span></div>
            <div class="tx-center mg-b-60">Journal of Studies in Education</div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter your username">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email address">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <input type="password" id="password-confirm" class="form-control @error('password-confirm') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password" placeholder="Enter your password">
                </div><!-- form-group -->

                <button type="submit" class="btn btn-info btn-block">  {{ __('Register') }}</button>
            </form>
            <div class="mg-t-60 tx-center">Already have account ? <a href="{{ route('login') }}" class="tx-info">Login</a></div>
        </div><!-- login-wrapper -->
    </div>
@endsection
