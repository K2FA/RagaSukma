@extends('layouts.auth.app')

@section('content')

    <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-lg-5 col-md-8">
            <div class="card mx-auto">
                <div class="card-body py-5 px-3">
                    <img src="/img/Logo Raga Sukma.png" alt="logo" class="rounded mx-auto d-block mb-2 logo" />

                    <form class="form-login">

                        <input type="hidden" name="token" value="{{$token}}">
                        <div class="mb-3">
                            <label for="email" class="form-label">{{__('Email')}}</label>
                            <input type="email" class="form-control @error('email')is-valid @enderror" name="email" id="email" value="{{$email ?? old('email')}}" required autocomplete="email"/>
                            @error('email')
                                <span class="text-danger text-sm" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">{{__('Password')}} </label>
                            <input type="password" class="form-control @error('password')is-valid @enderror" id="newPassword" name="password" required autocomplete="new-password"/>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{__('Confirm Password')}}</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password-confirm" name="password_confirmation" required autocomplete="new-password"/>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary my-4">{{ __('Reset Password') }}</button>
                        </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
