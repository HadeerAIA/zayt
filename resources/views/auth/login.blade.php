@extends('layouts.app')

@section('content')
<body id="regist">
    <div class="overlay" style="height:700px"></div>
<div style="height: 100px"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"  style="background-color:#095f45;color:#fff;height: 40px; text-align:center;font-size:30px">{{ __('تسجيل الدخول') }}</div>

                <div class="card-body"  style="border: 3px solid #095f45; border-radius:5px">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('اسم المستخدم') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('الرقم السري') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="text-align: right;">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('ذكرني') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div style="text-align: right;" class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="w-25 btn btn-gray-border btn-sm" style="margin-right: 100px" >
                                    {{ __('تسجيل') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="color: #095f45" href="{{ route('password.request') }}">
                                        {{ __('نسيت الرقم السري؟') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="height: 158px"></div>
</body>
@endsection
