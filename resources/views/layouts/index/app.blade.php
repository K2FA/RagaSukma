<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- CDN icon -->
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Css style -->
    <link rel="stylesheet" href="{{asset('/dist/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/index/index.css')}}" />

    <title>Ragasukma</title>
  </head>
  <body>
    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="/img/Logo Raga Sukma.png" alt="Logo" /></a>
        <div class="cart">
          <a class="nav-link me-lg-4 pt-3" href="#"><span class="material-symbols-outlined"> shopping_cart </span></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item pt-2"><a class="nav-link nav-hov about" aria-current="page" href="#">Tentang Kami</a></li>
          </ul>

          <ul class="navbar-nav ms-auto">
            <li class="nav-item lr">
              <a class="nav-link me-lg-4 nav-hov" href="#">Login</a>
            </li>
            <li class="nav-item lr">
              <a class="nav-link register px-3" href="#">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Navbar -->

        @yield('content')


    @include('layouts.index.footer')
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
