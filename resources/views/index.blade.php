@extends('layouts.main')
  @section('main')
  @include('partials.hero')
     <!-- ======= WISATA Section ======= -->
     <section id="recent-posts" class="recent-posts">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Wisata</h2>
        </div>

        <div class="row gy-5">
          @foreach($wisata as $wisatas)
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              @if($wisatas->count())
                @if ($wisatas->foto)
                  <div class="post-img"><img src="{{ asset('storage/' . $wisatas->foto) }}" class="img-fluid" alt=""></div>
                @else
                  <div class="post-img"><img src="https://source.unsplash.com/1200x800?" class="img-fluid" alt=""></div>
                @endif
              @endif 
              <h3 class="post-title"><a href="/wisata-details/{{ $wisatas->id }}">{{ $wisatas->namawisata }}</h3>
              <p>{{ $wisatas->excerpt }}</p>
              <a href="/wisata-details/{{ $wisatas->id }}"class="readmore stretched-link"><span>Lihat Detail Wisata</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section><!-- End WISATA Section -->

    <!-- ======= DESA ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>Daftar Desa</h3>
            <p>Terdapat 9 desa di Kecamatan Babakancikao</p>
            <a class="cta-btn" href="/desa">Lihat Selengkapnya</a>
          </div>
        </div>

      </div>
    </section><!-- End DESA-->

    <!-- ======= BERITA Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">



            <div class="row gy-5 posts-list">
              @foreach($berita as $posts)
                @if ($posts->count())
                  <div class="col-lg-3">
                    <article class="d-flex flex-column">
                      @if ($posts->foto)
                      <div class="post-img" style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $posts->foto) }}" alt="" class="img-fluid">
                      </div>
                      @else
                      <div class="post-img">
                      <img src="https://source.unsplash.com/1200x800?" alt="" class="img-fluid">
                      </div>
                      @endif
                @endif
                    <h2 class="title">
                      <a href="/berita-details/{{ $posts->id }}">{{ $posts->judul }}</a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{ $posts->penulis }}</li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> {{ $posts->created_at }}</li>
                      </ul>
                    </div>

                    <div class="content">
                      <p>
                      {{ $posts->excerpt }}</p>
                    </div>

                    <div class="read-more mt-auto align-self-end">
                      <a href="/berita-details/{{ $posts->id }}">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </article>
                </div>
              @endforeach
            </div>
      </div>
    </section><!-- End BERITA Section -->
  @endsection()