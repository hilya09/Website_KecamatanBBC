@extends('layouts.main')
  @section('main')
     <!-- ======= Breadcrumbs ======= -->
     <div class="breadcrumbs d-flex align-items-center" style="background-image:url(/assets/img/berita.jpg);">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Berita Kecamatan</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Berita</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

          <!-- <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200"> -->

            <div class="row gy-5 posts-list">
              @foreach($berita as $posts)
                @if ($posts->count())
                  <div class="col-lg-4">
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
                </div><!-- End post list item -->
              @endforeach
            </div><!-- End blog posts list -->
            
          <!-- </div> -->

      </div>
    </section><!-- End Blog Section -->
  @endsection()