@extends('layouts.maindash')
  @section('maindash')
  <div class="pagetitle">
      <h1>Unggah Wisata</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/post">Wisata</a></li>
          <li class="breadcrumb-item active">Unggah Wisata</li>
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
                <h5 class="card-title">Unggah Wisata Kecamatan Babakancikao</h5>
                @if(session()->has('addSuccess'))
                <div class="alert alert-success col-lg-13" role="alert">
                  {{ session('addSuccess') }}
                </div>
                @endif
                <!-- General Form Elements -->
                <form action ="/addwisata" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row mb-3">
                        <label for="namawisata" class="form-label">Nama Wisata</label>
                        <div class="col-sm-10">
                        <input type="text" name="namawisata" class="form-control @error('namawisata') is-invalid @enderror" id = "namawisata" autofocus required value="{{ old('namawisata') }}">
                            @error('namawisata')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <div class="col-sm-10">
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id = "alamat" required value="{{ old('alamat') }}">
                            @error('alamat')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="telp" class="form-label">Telepon</label>
                        <div class="col-sm-10">
                        <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" id = "telp" placeholder="08xxxxxxxxxx"required value="{{ old('telp') }}">
                            @error('telp')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="harga" class="form-label">HTM</label>
                        <div class="col-sm-10">
                        <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" id = "harga" required value="{{ old('harga') }}">
                            @error('harga')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="jamopr" class="form-label">Jam Operasional</label>
                        <div class="col-sm-10">
                        <input type="text" name="jamopr" class="form-control @error('jamopr') is-invalid @enderror" id = "jamopr" required value="{{ old('jamopr') }}">
                            @error('jamopr')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="foto" class="form-label">Foto 1</label>
                        <img class="img-preview img-fluid mb-2 col-sm-3">
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
                        <label for="fotodua" class="form-label">Foto 2</label>
                        <img class="img-preview2 img-fluid mb-2 col-sm-3">
                        <div class="col-sm-10">
                          <input type="file" name="fotodua" class="form-control @error('fotodua') is-invalid @enderror" id = "fotodua" 
                          name="fotodua" onchange="previewImage2()">
                          @error('fotodua')
                            <div class= "invalid-feedback">
                              {{ $message }}
                            </div>
                          @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="fototiga" class="form-label">Foto 3</label>
                        <img class="img-preview3 img-fluid mb-2 col-sm-3">
                        <div class="col-sm-10">
                          <input type="file" name="fototiga" class="form-control @error('fototiga') is-invalid @enderror" id = "fototiga" 
                          name="fototiga" onchange="previewImage3()">
                          @error('fototiga')
                            <div class= "invalid-feedback">
                              {{ $message }}
                            </div>
                          @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="fotoempat" class="form-label">Foto 4</label>
                        <img class="img-preview4 img-fluid mb-2 col-sm-3">
                        <div class="col-sm-10">
                          <input type="file" name="fotoempat" class="form-control @error('fotoempat') is-invalid @enderror" id = "fotoempat" 
                          name="fotoempat" onchange="previewImage4()">
                          @error('fotoempat')
                            <div class= "invalid-feedback">
                              {{ $message }}
                            </div>
                          @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="card-body">
                          <label for="body" class="form-label">Deskripsi Wisata</label>
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

                  </div>

                </form><!-- End General Form Elements -->

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-stripe table-sm">
                  <thead>
                    <tr>
                      <th scope="col">Nama Wisata</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Telepon</th>
                      <th scope="col">HTM</th>
                      <th scope="col">Jam Operasional</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($wisata as $wisatas)
                      <tr>
                        <!-- <td>{{ $loop->iteration }}</td> -->
                        <td>{{ $wisatas->namawisata}}</td>
                        <td>{{ $wisatas->alamat}}</td>
                        <td>{{ $wisatas->telp}}</td>
                        <td>{{ $wisatas->harga}}</td>
                        <td>{{ $wisatas->jamopr}}</td>
                        <td>
                          <a href="/editwisata/{{ $wisatas->id }}" class="badge bg-warning"><span class="bi bi-pencil-square"></span></a>
                          <form action="/addwisata/{{ $wisatas->id }}" method="post" class="d-inline">
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
  
    function previewImage2(){
      const image = document.querySelector('#fotodua');
      const imgPreview = document.querySelector('.img-preview2');

      imgPreview.style.display ='block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }
    }

    function previewImage3(){
      const image = document.querySelector('#fototiga');
      const imgPreview = document.querySelector('.img-preview3');

      imgPreview.style.display ='block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }
    }

    function previewImage4(){
      const image = document.querySelector('#fotoempat');
      const imgPreview = document.querySelector('.img-preview4');

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