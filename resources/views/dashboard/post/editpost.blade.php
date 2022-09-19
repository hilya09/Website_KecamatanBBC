@extends('layouts.maindash')
  @section('maindash')
  <div class="pagetitle">
      <h1>Edit Berita</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/post">Berita</a></li>
          <li class="breadcrumb-item active">Edit Berita</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="col-lg-11">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Edit Berita Kecamatan Babakancikao</h5>
                <!-- General Form Elements -->
                <form action ="/updatepost/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <div class="col-sm-10">
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id = "judul" autofocus required value="{{ old('judul', $posts->judul) }}">
                            @error('judul')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Penulis" class="form-label">Penulis</label>
                        <div class="col-sm-10">
                        <input type="text" name="penulis" class="form-control @error('penulis') is-invalid @enderror" id = "penulis" autofocus required value="{{ old('penulis', $posts->penulis) }}">
                            @error('penulis')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="publish_at" class="form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" name="publish_at" class="form-control @error('publish_at') is-invalid @enderror" id = "publish_at" required value="{{ old('publish_at', $posts->publish_at) }}">
                            @error('publish_at')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        @if($posts->foto)
                          <img src = "{{ asset('storage/' . $posts->foto) }}"class="img-preview img-fluid mb-3 col-sm-5">
                        @else
                          <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <div class="col-sm-10">
                          <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" id = "foto"
                          name="foto" onchange="previewImage()">
                          @error('foto')
                            <div class= "invalid-feedback">
                              {{ $message }}
                            </div>
                          @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="card-body">
                          <label for="body" class="form-label">Isi Berita</label>
                            @error('body')
                              <p class= "text-danger">{{ $message }}</p> 
                            @enderror
                            <input id="body" type="hidden" name="body" class="form-control @error('body') is-invalid @enderror" required value="{{ old('body', $posts->body) }}">
                            <trix-editor input="body"></trix-editor>
                        </div>

                        <div class="row mb-3">
                          <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary">Perbarui</button>
                          </div>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->

            </div>
            
          </div>

        </div>
    </section>
    
    <script>
      function previewImage(){
      const image = document.querySelector('#foto');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display ='block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }

    }
    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })
    </script>
  @endsection()