<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie-edge">
   <title>JobFinder</title>

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@500&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@600&family=Rubik+Mono+One&display=swap" rel="stylesheet">
   <link rel="icon" type="image/png" sizes="16x16" href="/images/logo-i.png">
   <link rel="stylesheet" href="css/login.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <style>
       /* Center the image on desktop */
       @media (min-width: 768px) {
           .right-pane img {
               display: flex;
               margin: 200px auto;
           }
       }
   </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 left-pane">
            <div class="logo">JobFinder<img src="images/logo-i.png" width="54px" alt="Logo"></div>
            <div class="slk">
                <p>Selamat datang kembali</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="form-group">
                        <input class="email-input form-control @error('email') is-invalid @enderror"
                        type="email" placeholder="E-mail" name="email"
                        value="{{ old('email')}}" required autocomplete="email" autofocus>
                        @error('email')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="email-input form-control @error('password') is-invalid @enderror"
                        type="password" id="exampleDropdownFormPassword1" placeholder="Password" name="password" required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                <div class="form-group">
                    <button type="submit" class="btn-login mt-4">Login</button>
                </div>
                <div class="d-flex p-2 bd-highlight sp">
                    <small><a href="/registerp">Daftar</a> | <a href="#">Lupa Password?</a></small>
                </div>
            </form>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 d-none d-md-block right-pane align-items-center">
            <img class="img" src="/images/img.png" alt="">
        </div>
    </div>
</div>
  
</body>
</html>
