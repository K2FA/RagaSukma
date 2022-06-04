@extends('layouts.auth.app')

@section('content')
    <div class="container mt-5">
      <div class="row justify-content-center">
          <div class="col-lg-5 col-md-8">
            <div class="card mx-auto">
                <div class="card-body">
                    <img src="{{asset('/assets/img/Logo Raga Sukma.png')}}" alt="logo" class="rounded mx-auto d-block mb-2 logo" />

                    <form class="form-login" method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3 mail">
                        <label for="username" class="form-label">Username </label>
                        <input type="text" class="form-control @error('username')is-invalid @enderror" id="username" name="username" value="{{old('username')}}"  required autocomplete="email"/>
                        @error('username')
                            <span class="text-danger text-sm" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 mail">
                        <label for="exampleInputEmail1" class="form-label">Email </label>
                        <input type="email" class="form-control @error('email')is-invalid @enderror" id="exampleInputEmail1" name="email" value="{{old('email')}}"  required autocomplete="email"/>
                        @error('email')
                            <span class="text-danger text-sm" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password')is-invalid @enderror" id="exampleInputPassword1" name="password" required autocomplete="new-password"/>
                        @error('password')
                            <span class="text-danger text-sm" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control  @error('password_confirmation')is-invalid @enderror" id="exampleInputPassword1" name="password_confirmation" required autocomplete="new-password"/>
                        @error('password_confirmation')
                            <span class="text-danger text-sm" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    {{-- <a href="#" class="btn btn-primary justify-content-center d-flex mt-4">Sign up</a> --}}

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary submit" >
                                {{ __('Register') }}
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="row justify-content-center m-0 p-0">
            <div class="col-lg-5 col-md-8">
                <div class="card mx-auto mt-2">
                    <div class="card-body text-center">
                        <p>Have an account?? <a href="{{route('login')}}">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
