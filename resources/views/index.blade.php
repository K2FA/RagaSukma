@extends('layouts.index.app')

@section('content')

    <!-- Hero -->
    <section>
        <div class="jumbotron jumbotron-fluid">
          <div class="row mx-0 px-0">
            <div class="col-lg-5 col-md-6 col-sm-1 ms-lg-5 ms-md-4 img">
              <img src="assets/img/imgJumbotron.jpg" alt="RagaSukma" />
            </div>
            <div class="col-lg-5 col-md-5 desc ms-md-4">
              <h2>Kalian Suka Ngopi Tapi Mager Pergi? Pesan Kopi di RagaSukma</h2>
            </div>
          </div>
        </div>
      </section>
      <!-- End of Hero -->

      <!-- Product -->
      <section>
        <div class="row px-0 mx-0 product">
          <div class="col title my-5 ms-4">
            <h2 class="fw">Produk</h2>
          </div>
        </div>
        <!-- Row for card -->
        <div class="row px-0 mx-0">
          <div class="col-lg-3 col-md-5 mb-md-5 mx-md-auto">
            <div class="card ms-4 card1">
              <img src="assets/img/kopisusu.png" alt="kopiSusu" class="card-img-top" />
              <div class="card-body">
                <h4 class="card-title">Es Kopi Susu</h4>
                <p class="card-text" style="font-weight: 10">Es Kopi Susu adalah minuman yang terbuat dari espresso, susu uht dan susu kental manis...</p>
                <a href="page/detailEsKopiSusu.html" class="btn btn-primary">Lihat Produk</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 mb-md-5 mx-md-auto">
            <div class="card ms-4 card2">
              <img src="assets/img/RedVelvet.png" alt="Red Velvet" class="card-img-top" />
              <div class="card-body">
                <h4 class="card-title">Red Velvet Latte</h4>
                <p class="card-text" style="font-weight: 10">Minuman Red Velvet adalah minuman yang terbuat dari bubuk Red Velvet dan susu segar...</p>
                <a href="page/redVelvet.html" class="btn btn-primary">Lihat Produk</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 mx-md-auto">
            <div class="card ms-4 card3">
              <img src="assets/img/greentea.png" alt="Green Tea" class="card-img-top" />
              <div class="card-body">
                <h4 class="card-title">Green Tea Latte</h4>
                <p class="card-text" style="font-weight: 10">Minuman Green tea adalah minuman yang terbuat dari bubuk Green Tea, dan susu...</p>
                <a href="page/greenTea.html" class="btn btn-primary">Lihat Produk</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-5 mx-md-auto">
            <div class="card ms-4 card4">
              <img src="assets/img/Taro.png" alt="Taro" class="card-img-top" />
              <div class="card-body">
                <h4 class="card-title">Taro Latte</h4>
                <p class="card-text" style="font-weight: 10">Minuman Taro adalah minuman yang dibuat dari bubuk Taro, dan susu segar...</p>
                <a href="page/taro.html" class="btn btn-primary">Lihat Produk</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End of Product -->
@endsection
