 <!-- Navbar  -->
 <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/img/Logo Raga Sukma.png')}}" alt="Logo" /></a>
      <div class="cart">
        <a class="nav-link me-lg-4 pt-3" href="#"><span class="material-symbols-outlined"> shopping_cart </span></a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item pt-2">
            <a class="nav-link nav-hov about" aria-current="page" href="#">Tentang Kami</a>
          </li>
          <li class="nav-item pt-2 ms-lg-3">
            <a class="nav-link nav-hov" aria-current="page" href="{{url('/produk')}}">Produk</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          <li class="nav-item lr">
            <a class="nav-link me-lg-4 nav-hov" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item lr">
            <a class="nav-link register px-3" href="{{route('register')}}">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End of Navbar -->
