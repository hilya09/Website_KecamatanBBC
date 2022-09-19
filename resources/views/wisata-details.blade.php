@extends('layouts.main')
  @section('main')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-color: #495C83;">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>{{ $wisata->namawisata }}</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Detail Wisata</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="slides-1 portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
              @if ($wisata->count())
                @if ($wisata->foto)
                <div class="swiper-slide">
                  <img src="{{ asset('storage/' . $wisata->foto) }}" alt="">
                </div>
                @else
                <div class="post-img">
                  <img src="https://source.unsplash.com/1200x800?" alt="" class="img-fluid">
                </div>
                @endif
              @endif

              @if ($wisata->count())
                @if ($wisata->fotodua)
                <div class="swiper-slide">
                  <img src="{{ asset('storage/' . $wisata->fotodua) }}" alt="">
                </div>
                @else
                <div class="post-img">
                  <img src="https://source.unsplash.com/1200x800?" alt="" class="img-fluid">
                </div>
                @endif
              @endif

              @if ($wisata->count())
                @if ($wisata->fototiga)
                <div class="swiper-slide">
                  <img src="{{ asset('storage/' . $wisata->fototiga) }}" alt="">
                </div>
                @else
                <div class="post-img">
                  <img src="https://source.unsplash.com/1200x800?" alt="" class="img-fluid">
                </div>
                @endif
              @endif

              @if ($wisata->count())
                @if ($wisata->fotoempat)
                <div class="swiper-slide">
                  <img src="{{ asset('storage/' . $wisata->fotoempat) }}" alt="">
                </div>
                @else
                <div class="post-img">
                  <img src="https://source.unsplash.com/1200x800?" alt="" class="img-fluid">
                </div>
                @endif
              @endif
              
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Informasi Lengkap</h3>
              <ul>
                <!-- <li><strong>Alamat</strong>: Jalan Buana Indah, Desa, Mulyamekar, Kec. Babakancikao, Kabupaten Purwakarta, Jawa Barat 41151.</li>
                <li><strong>Telepon</strong>: (0264) 830 6621</li>
                <li><strong>HTM</strong>: Rp 15.000; / orang</li>
                <li><strong>Jam Operasional</strong>: 09.00-16.00 WIB, Senin tutup</li> -->
                <li><strong>Alamat</strong>: {{ $wisata->alamat }}</li>
                <li><strong>Telepon</strong>: {{ $wisata->telp }} </li>
                <li><strong>HTM</strong>: Rp {{ $wisata->harga }}; / orang</li>
                <li><strong>Jam Operasional</strong>: {{ $wisata->jamopr }} WIB</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>{{ $wisata->namawisata }}</h2>
              <p>
                <!-- Kampung Sadang kerap kali dimanfaatkan sebagai lokasi venue pernikahan ataupun gathering sebab tempatnya sangat luas serta banyak pohon yang sangat teduh.<br><br>
                Selain itu, tempat satu ini juga telah dilengkapi dengan beberapa wahana permainan seperti bebek air untuk mengelilingi danau, flying fox, jembatan gantung yang terbuat dari kayu, dan juga beberapa spot foto menarik.  -->
              {!! $wisata->body !!}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
  @endsection()