@extends('layouts.maindash')
  @section('maindash')
  <div class="pagetitle">
      <h1>Unggah Berita</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/post">Berita</a></li>
          <li class="breadcrumb-item active">Unggah Berita</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @if(session()->has('delSuccess'))
      <div class="alert alert-danger col-lg-11" role="alert">
        {{ session('delSuccess') }}
      </div>
    @endif
    @if(session()->has('success'))
      <div class="alert alert-success col-lg-11" role="alert">
        {{ session('success') }}
      </div>
    @endif
    <section class="section">
        <div class="col-lg-11">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Unggah Berita Kecamatan Babakancikao</h5>
                @if(session()->has('addSuccess'))
                <div class="alert alert-success col-lg-13" role="alert">
                  {{ session('addSuccess') }}
                </div>
                @endif
                <!-- General Form Elements -->
                <form action ="/post" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <div class="col-sm-10">
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id = "judul" autofocus required value="{{ old('judul') }}">
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
                        <input type="text" name="penulis" class="form-control @error('penulis') is-invalid @enderror" id = "penulis" autofocus required value="{{ old('penulis') }}">
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
                            <input type="date" name="publish_at" class="form-control @error('publish_at') is-invalid @enderror" id = "publish_at" required value="{{ old('publish_at') }}">
                            @error('publish_at')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
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
                            <input id="body" type="hidden" name="body" class="form-control @error('body') is-invalid @enderror">
                            <trix-editor input="body"></trix-editor>
                        </div>

                        <div class="row mb-3">
                          <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary">Unggah</button>
                          </div>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-stripe table-sm">
                  <thead>
                    <tr>
                      <th scope="col">Judul</th>
                      <th scope="col">Penulis</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Kutipan</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($berita as $posts)
                      <tr>
                        <!-- <td>{{ $loop->iteration }}</td> -->
                        <td>{{ $posts->judul}}</td>
                        <td>{{ $posts->penulis}}</td>
                        <td>{{ $posts->publish_at}}</td>
                        <td>{{ $posts->excerpt}}</td>
                        
                        <td>
                        <a href="/editpost/{{ $posts->id }}" class="badge bg-warning"><span class="bi bi-pencil-square"></span></a>
                          <form action="/post/{{ $posts->id }}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="badge bg-danger border-0" onclick ="return confirm ('Yakin Anda Ingin Menghapus?')"><span class="bi bi-trash"></span> </button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
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