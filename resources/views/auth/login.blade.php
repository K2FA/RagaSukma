<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/login.css" />

    <!-- css style -->

    <title>Login</title>
  </head>
  <body>
    <div class="container my-auto">
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <img src="/img/Logo Raga Sukma.png" alt="logo" class="rounded mx-auto d-block mb-2 logo" />

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
                    <button type="submit" class="btn btn-primary mt-3 " style="width: 200px">
                        {{ __('Login') }}
                    </button>
                </div>

              <a href="/forgot-password" class="d-flex justify-content-center mt-3 forgot">Forgot Password?</a>
              {{-- @if (Route::has('password.request'))
                <a class="btn btn-link d-flex justify-content-center mt-3" href="{{ route('password.request') }}">
                    {{ __('Forgot  Password?') }}
                </a>
              @endif --}}
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto mt-2">
          <div class="card-body text-center">
            <p>Don't have an account? <a href="{{route('register')}}">Create an Account</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/dist/js/bootstrap.min.js"></script>
  </body>
</html>
