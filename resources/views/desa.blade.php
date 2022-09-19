@extends('layouts.main')
  @section('main')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image:url(/assets/img/pemandangan.jpg);">
        <div class="container position-relative d-flex flex-column align-items-center">
  
          <h2>Desa</h2>
          <ol>
            <li><a href="/">Beranda</a></li>
            <li>Desa</li>
          </ol>
  
        </div>
      </div><!-- End Breadcrumbs -->
  
      <!-- ======= Blog Section ======= -->
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Daftar Desa di Kecamatan Babakancikao</h2>
          </div>
              <!-- <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Kode Wilayah</th>
                    <th scope="col">Nama Desa</th>
                    <th scope="col">Website</th>
                    <th scope="col">Luas Wilayah (km<sup>2</sup>)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">32.42.12.2001</td>  
                    <td>Desa Cilangkap</td>
                    <td><a href="https://cilangkap-purwakarta.desa.id/">Website desa Cilangkap</a></td>
                    <td>0</td>
                  </tr>

                  <tr>
                    <td scope="row">32.42.12.2002</td>
                    <td>Desa Cicadas</td>
                    <td><a href="https://cicadas.desa.id/">Website desa Cicadas</a></td>
                    <td>0</td>
                  </tr>

                  <tr>
                    <td scope="row">32.42.12.2003</td>
                    <td>Desa Hegarmanah</td>
                    <td><a href="https://hegarmanah-purwakarta.desa.id/">Website desa Hegarmanah</a></td>
                    <td>0</td>
                  </tr>

                  <tr>
                    <td scope="row">32.42.12.2004</td>
                    <td>Desa Bababkancikao</td>
                    <td><a href="https://babakancikao.desa.id/">Website desa Bababkancikao</a></td>
                    <td>0</td>
                  </tr>

                  <tr>
                    <td scope="row">32.42.12.2005</td>
                    <td>Desa Kadumekar</td>
                    <td><a href="https://kadumekar.desa.id/">Website desa Kadumekar</a></td>
                    <td>0</td>
                  </tr>

                  <tr>
                    <td scope="row">32.42.12.2006</td>
                    <td>Desa Maracang</td>
                    <td><a href="https://maracang.desa.id/">Website desa Maracang</a></td>
                    <td>0</td>
                  </tr>

                  <tr>
                    <td scope="row">32.42.12.2007</td>
                    <td>Desa Ciwareng</td>
                    <td><a href="https://ciwareng.desa.id/">Website desa Ciwareng</a></td>
                    <td>0</td>
                  </tr>
                 
                  <tr>
                    <td scope="row">32.42.12.2008</td>
                    <td>Desa Mulyamekar</td>
                    <td><a href="https://mulyamekar.desa.id/">Website desa Mulyamekar</a></td>
                    <td>0</td>
                  </tr>

                  <tr>
                    <td scope="row">32.42.12.2009</td>
                    <td>Desa Cigelam</td>
                    <td><a href="https://cigelam-purwakarta.desa.id/">Website desa Cigelam</a></td>
                    <td>0</td>
                  </tr>

                </tbody>
              </table> -->
              <div class="table-responsive">
                <table class="table table-stripe table-sm">
                  <thead>
                    <tr>
                      <th scope="col">Kode Wilayah</th>
                      <th scope="col">Nama Desa</th>
                      <th scope="col">Website</th>
                      <th scope="col">Luas Wilayah (km<sup>2</sup>)</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($desa as $desas)
                      <tr>
                        <td scope="row">{{ $desas->kodewilayah }}</td>
                        <td>{{ $desas->namadesa }}</td>
                        <td><a href="{{ $desas->url }}">Website desa {{ $desas->namadesa }}</a></td>
                        <td>{{ $desas->luaswil }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
        </div>
      </section><!-- End Blog Section -->
  @endsection()