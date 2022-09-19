@extends('layouts.main')
  @section('main')
     <!-- ======= Breadcrumbs ======= -->
     <div class="breadcrumbs d-flex align-items-center" style="background-image: url( {{ asset('storage/' . $berita->foto) }} );">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>{{ $berita->judul }}</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
          
            <h6 >Dibuat: {{ $berita->created_at }}</h6>
            <h6 >Penulis: {{ $berita->penulis }}</h6>
            <h6><br></h6>

           {!! $berita->body !!}
            
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

            <div class="sidebar ps-lg-4">

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Berita Lainnya</h3>

                <div class="mt-3">
                  
                  @foreach($beritas as $berita)
                    <div class="post-item mt-3">
                      @if($berita->count())
                          @if ($berita->foto)
                            <img src="{{ asset('storage/' . $berita->foto) }}" alt="">
                          @else
                            <img src="https://source.unsplash.com/1200x800?" alt="" class="img-fluid">
                          @endif
                      @endif 
                          <div>
                          <h7><a href="/berita-details/{{ $berita->id }}">{{ $berita->judul }}</a></h7>
                            <time datetime="2020-01-01">{{ $berita->created_at }}</time>
                          </div>
                    </div>
                  @endforeach
                </div>
              </div><!-- End sidebar recent posts-->
            </div><!-- End Blog Sidebar -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

  @endsection()