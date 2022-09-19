<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/img/logo-pwk.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/css/signin.css" rel="stylesheet">
    <title>Kecamatan Babakancikao | Login</title>

  </head>
  <body class="text-center">
      <main class="form-signin w-100 m-auto bg-white">
        <form action="/login" method="post">
          @csrf
          <img class="mb-4" src="assets/img/logo-pwk.png" alt="" width="45" height="55">
          <h1 class="h6 mb-4 fw-bold">PEMERINTAHAHAN KABUPATEN PURWAKARTA <br> KECAMATAN BABAKANCIKAO</h1>
          @if(session() -> has ('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert"
              aria-label="Close"></button>
            </div>
          @endif
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old ('email')}}">
            <label for="email">Alamat E-mail</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <label for="floatingPassword">Kata Sandi</label>
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
              <a href="/kembali" class="mt-4 w-100 btn btn-lg btn-primary">Kembali</a>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <button class="mt-4 w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </div>
          </div>
          <p class="mt-3 mb-3 text-muted">&copy; 2022</p>
        </form>
      </main>
  </body>
</html>