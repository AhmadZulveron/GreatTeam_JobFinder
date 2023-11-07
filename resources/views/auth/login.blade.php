{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
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
        <div class="col-lg-6 col-md-6 col-sm-12 left-pane">
            <div class="logo">JobFinder<img src="images/logo-i.png" width="54px" alt="Logo"></div>
            <div class="slk">
                <p>Selamat datang kembali</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input class="email-input" style="margin-bottom: 20px" type="email" placeholder="E-mail" value="{{ old('email')}}" required autocomplete="email" autofocus>
                <input class="email-input" type="password" placeholder="Password" value="{{ old('password')}}" required autocomplete="current-password">
                <button type="submit" class="btn-login mt-4">Login</button>
                <div class="d-flex p-2 bd-highlight sp">
                    <small><a href="/pelamar-register">Daftar</a> | <a href="#">Lupa Password?</a></small>
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
