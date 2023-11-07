<!DOCTYPE html>
<html>
<head>
    <title>JobFinder</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/logo-i.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/resp.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <a class="navbar-brand" href="/"><img src="/images/logo-text-dark.png" width="86px" alt=""><img src="/images/logo-i.png" width="36px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link linku" href="/daftar-lowongan">Lowongan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link linku active" href="/daftar-perusahaan">Perusahaan</a>
                </li>
            </ul>
            <form action="{{ route('login') }}">
              @guest
                @if (Route::has('login'))
                  <button class="btn btn-primary nav-link text-white w-100" style="background:#3A6CB9;">Sign In</button>
                @endif
              @else
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>
    
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
    
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
            </form>
        </div>
    </nav>

    <div class="container-fluid" style="background-color: #D2DCFF; padding-top: 65px">
        <div class="col-md-4 pt-3">
            <div class="input-group">
                <input class="form-control py-2 rounded-pill mr-1 pr-5" type="search" placeholder="Search" id="example-search-input">
                <span class="input-group-append">
                    <button class="btn rounded-pill border-0 ml-n5" type="button">
                        <i class="fa fa-search"><img src="/images/search.png" width="24px" alt=""></i>
                    </button>
                </span>
            </div>
        </div>
        <div class="">
            <div class="rounded-panel" style="background-color: #D2DCFF;">
                <div class="row">
                    @for ($i = 0; $i < 10; $i++)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="d-flex flex-wrap">
                                        <img src="/images/rectangle38.png" alt="">
                                        <div class="flex-row">
                                            <div class="align-self-start"><p class="card-text text-dark ml-2">Nama Perusahaan</p></div>
                                            <div class="align-self-center"><p class="card-text ml-2">Alamat</p></div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row-reverse">
                                        <a href="javascript:void()" class="btn"><img src="/images/saved.png" height="40px" alt=""></a>
                                    </div>
                                </div>
                                
                                <div class="d-flex mt-4">
                                    <img src="/images/Buildings.png" height="25px" alt="">
                                    <div class="flex-row">
                                        <div class="align-self-center ml-3"><p>Bidang perusahaan</p></div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <img src="/images/suitcase.png" height="25px" alt="">
                                    <div class="flex-row">
                                        <div class="align-self-center ml-3"><p>2 lowongan</p></div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <img src="/images/www.png" height="25px" alt="">
                                    <div class="flex-row">
                                        <div class="align-self-center ml-3"><p>website perusahaan</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
            <button class="btn back-to-top" id="backToTopButton">
                <img src="/images/arrow-up-1.png" alt="" width="54px">
            </button>
        </div>
    </div>

    
    @include('frontend.layouts.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="/js/card-element.js"></script>
    <script src="/js/back-to-top.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
