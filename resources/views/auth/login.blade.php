@extends('layouts.auth.app')
@section('content')
    <div class="container mt-5 ">
      <div class="row justify-content-center ">
          <div class="col-lg-5 col-md-8 ">
            <div class="card mx-auto">
                <div class="card-body py-5 px-3">
                    <img src="{{asset('/assets/img/Logo Raga Sukma.png')}}" alt="logo" class="rounded mx-auto d-block mb-2 logo" />

                    <form class="form-login" method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3 mail">
                        <label for="exampleInputEmail1" class="form-label">Email </label>
                        <input type="email" class="form-control @error('email')is-invalid @enderror" id="exampleInputEmail1" name="email" value="{{old('email')}}"  required autocomplete="email">
                        @error('email')
                            <span class="text-danger text-sm" role="alert">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password"  required autocomplete="current-password">
                        @error('password')
                            <span class="text-danger text-sm" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    {{-- <a href="#" class="btn btn-primary justify-content-center d-flex mt-4">Login</a> --}}

                        <div class="text-center " >
                            <button type="submit" class="btn btn-primary mt-3 submit" >
                                {{ __('Login') }}
                            </button>
                        </div>

                    <a href="{{route('password.request')}}" class="d-flex justify-content-center mt-3 forgot">Forgot Password?</a>
                    {{-- @if (Route::has('password.request'))
                        <a class="btn btn-link d-flex justify-content-center mt-3" href="{{ route('password.request') }}">
                            {{ __('Forgot  Password?') }}
                        </a>
                    @endif --}}
                    </form>
                </div>
            </div>
        </div>
        <div class="row justify-content-center m-0 p-0">
            <div class="col-lg-5 col-md-8 ">
                <div class="card mt-2 mx-auto">
                    <div class="card-body text-center">
                        <p>Don't have an account? <a href="{{route('register')}}">Create an Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
