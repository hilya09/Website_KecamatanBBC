@extends('layouts.main')
  @section('main')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image:url(/assets/img/wisata2.jpg);">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Wisata</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Wisata</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
          
          <div class="section-header">
            <h2>Daftar Wisata di Kecamatan Babakancikao</h2>
          </div>

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">
            @foreach($wisata as $wisatas)
              @if ($wisatas->count())
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  @if ($wisatas->foto)
                    <img src="{{ asset('storage/' . $wisatas->foto) }}" class="img-fluid" alt="">
                  @else
                   <div class="post-img">
                      <img src="https://source.unsplash.com/1200x800?" alt="" class="img-fluid">
                    </div>
                  @endif
                  <div class="portfolio-info">
                    <h4>{{ $wisatas->namawisata }}</h4>
                    <p>{{ $wisatas->excerpt }}</p>

                    @if ($wisatas->foto)
                    <a href="{{ asset('storage/' . $wisatas->foto) }}" title="{{ $wisatas->namawisata }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    @else
                    <a href="/wisata-details" title="{{ $wisatas->namawisata }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    @endif
                    <a href="/wisata-details/{{ $wisatas->id }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div><!-- End Portfolio Item -->
              @endif
            @endforeach

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->
  @endsection()