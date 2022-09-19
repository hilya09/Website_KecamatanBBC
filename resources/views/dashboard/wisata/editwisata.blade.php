@extends('layouts.maindash')
  @section('maindash')
  <div class="pagetitle">
      <h1>Edit Wisata</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/post">Wisata</a></li>
          <li class="breadcrumb-item active">Edit Wisata</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="col-lg-11">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Edit Wisata Kecamatan Babakancikao</h5>
                <!-- General Form Elements -->
                <form action ="/updatewisata/{{ $wisata->id }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row mb-3">
                        <label for="namawisata" class="form-label">Nama Wisata</label>
                        <div class="col-sm-10">
                        <input type="text" name="namawisata" class="form-control @error('namawisata') is-invalid @enderror" id = "namawisata" autofocus required value="{{ old('namawisata', $wisata->namawisata) }}">
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
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id = "alamat" required value="{{ old('alamat', $wisata->alamat) }}">
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
                        <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" id = "telp" placeholder="08xxxxxxxxxx"required value="{{ old('telp', $wisata->telp) }}">
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
                        <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" id = "harga" required value="{{ old('harga', $wisata->harga) }}">
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
                        <input type="text" name="jamopr" class="form-control @error('jamopr') is-invalid @enderror" id = "jamopr" required value="{{ old('jamopr', $wisata->jamopr) }}">
                            @error('jamopr')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="foto" class="form-label">Foto 1</label>
                        @if($wisata->foto)
                          <img src = "{{ asset('storage/' . $wisata->foto) }}"class="img-preview img-fluid mb-2 col-sm-3">
                        @else
                          <img class="img-preview img-fluid mb-2 col-sm-3">
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
                        <label for="fotodua" class="form-label">Foto 2</label>
                        @if($wisata->foto)
                          <img src = "{{ asset('storage/' . $wisata->fotodua) }}"class="img-preview2 img-fluid mb-2 col-sm-3">
                        @else
                          <img class="img-preview2 img-fluid mb-2 col-sm-3">
                        @endif
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
                        @if($wisata->foto)
                          <img src = "{{ asset('storage/' . $wisata->fototiga) }}"class="img-preview3 img-fluid mb-2 col-sm-3">
                        @else
                          <img class="img-preview3 img-fluid mb-2 col-sm-3">
                        @endif
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
                        @if($wisata->foto)
                          <img src = "{{ asset('storage/' . $wisata->fotoempat) }}"class="img-preview4 img-fluid mb-2 col-sm-3">
                        @else
                          <img class="img-preview4 img-fluid mb-2 col-sm-3">
                        @endif
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
                            <input id="body" type="hidden" name="body" class="form-control @error('body') is-invalid @enderror" required value="{{ old('body', $wisata->body) }}">
                            <trix-editor input="body"></trix-editor>
                        </div>

                        <div class="row mb-3">
                          <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary">Perbarui</button>
                          </div>
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