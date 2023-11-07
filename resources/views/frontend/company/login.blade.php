<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>JobFinder</title>

   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@600&family=Rubik+Mono+One&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/login2.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="left-pane">
        <img class="img" src="/images/img.png" alt="">
    </div>
  <div class="right-pane">
    <div class="logo">JobFinder<img src="images/logo-i.png" width="54px" alt="Logo"></div>
    <div class="slk">
      <p>Selamat datang kembali</p>
    </div>
    <form action="/perusahaan-dashboard">
      @csrf
      <input class="email-input form-control @error('email') is-invalid @enderror" style="margin-bottom: 20px" type="email" placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email" autofocus>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      <input class="email-input form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" required>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      <button type="submit" class="btn-login mt-4">Login</button>
      <div class="d-flex p-2 bd-highlight sp">
        <small><a href="#">Daftar</a> | <a href="#">Lupa Password?</a></small>
      </div>
    </form>
  </div>
</body>
</html>