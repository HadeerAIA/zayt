@extends('layouts.app')
@section('content')
<body   id="regist">
    <div class="overlay" style="height:700px"></div>
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#095f45;color:#fff;height: 40px; text-align:center;font-size:30px">{{ __('انشاء حساب') }}</div>

                <div class="card-body" style="border: 3px solid #095f45; border-radius:5px;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name"  class="col-md-4 col-form-label text-md-right">{{ __('الاسم') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:#095f45;">{{__('يرجي ادخال الاسم بالكامل')}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('اسم المستخدم') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:#095f45;">{{__('يرجي ادخال اسم المستخدم')}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('البريد الالكتروني') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:#095f45;">{{__('يرجي ادخال البريد الالكتروني')}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"class="col-md-4 col-form-label text-md-right">{{ __('الرقم السري') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:#095f45;">{{ __('يجب ان لا يقل كلمة السر عن 8 أحرف') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تأكيد الرقم السري') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div style="text-align: right;" class="form-group row mb-0">
                            <div  class="col-md-6 offset-md-4">
                                <button type="submit"  class="w-25 btn btn-gray-border btt btn-sm" style="margin-right:120px;" >
                                    {{ __('انشاء') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="height: 50px"></div>

</body>
@endsection
