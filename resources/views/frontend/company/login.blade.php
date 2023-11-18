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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <style>
       /* Center the image on desktop */
       @media (min-width: 768px) {
           .right-pane img {
               display: flex;
               margin: 200px auto;
           }
       }

       .btn-login {
            font: inherit;
            color: white;
            border: 3px solid #25477B ;
            background: #3A6CB9;
            /* padding: 0.75rem 3em; */
            transition: background-color 250ms;

            isolation: isolate;
            position: relative;

            overflow: hidden;
        }

        .btn-login:hover,
        .btn-login:focus-visible{
            background: #25477B;
            color: white;
        }

        button::before {
            content: "";
            position: absolute;
            z-index: -1;
            background: #3a6db998;
            /* background: hotpink; */
            width: 10%;
            aspect-ratio: 1;
            border-radius: 50%;
            inset: 0;
            margin: auto;
            opacity: 0;

            transition: transform 500ms;
        }

        button:active::before {
            transform: scale(15);
            opacity: 1;
            
            transition: transform 300ms, opacity 100ms;
        }

   </style>
</head>
<body>
    <div class="left-pane">
        <img class="img" src="/images/img.png" alt="">
    </div>
    <div class="col-md-6 d-flex justify-content-center" style="height: 100vh; font-family: KoHo">
      <div class="text-center" style="width: 75%">
          <div class="logo">JobFinder<img src="images/logo-i.png" width="54px" alt="Logo"></div>
      <div class="slk">
          <p>Selamat datang kembali</p>
      </div>
          <form method="GET" action="/perusahaan-dashboard">
              {{-- @csrf --}}
                  <div class="form-group form-floating mb-3">
                      <input class="email-input form-control @error('email') is-invalid @enderror"
                      type="email" placeholder="E-mail" name="email"
                      value="{{ old('email')}}" required autocomplete="email" autofocus>
                      <label for="email">Email Address</label>
                      @error('email')
                      <div class="invalid-feedback">
                      {{ $message }}
                      </div>
                      @enderror
                  </div>
                  <div class="form-group form-floating mb-3">
                      <input class="email-input form-control @error('password') is-invalid @enderror"
                      type="password" id="exampleDropdownFormPassword1" placeholder="Password" name="password" required>
                      <label for="password">Password</label>
                      @error('password')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                      <div class="d-flex justify-content-between align-items-center mt-1">
                          <div class="text-start">
                              <small><a href="/reset-password" style="text-decoration: none">Lupa Password?</a></small>
                          </div>
                          <div class="text-end">
                              <small>Belum punya akun? <a href="/registerp" style="text-decoration: none">Daftar</a></small>
                          </div>
                      </div>
                  </div>
              {{-- <div class="form-group"> --}}
                  <button type="submit" class="btn btn-login w-100">Login</button>
                  <div class="mt-5">
                    <h6>Back to <a href="/">Home</a></h6>
                  </div>
              {{-- </div> --}}
          </form>
      </div>
  </div>
</body>
</html>