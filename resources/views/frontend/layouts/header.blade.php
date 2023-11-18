{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">JobFinder <img src="/images/logo-i.png" width="24px" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Lowongan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Lowongan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Perusahaan</a>
          </li>
        </ul>
        <ul class="navbar-nav d-flex justify-content-end mr-2">
            <li class="nav-item drop-down">
                @if (!session('email'))
                <a class="nav-link btn btn-success" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
                  Sign In
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/login">Sign In</a>
                  <a class="dropdown-item" href="#">Sign Up</a>
                </div>
              @else
                  <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
                    <img src="/images/Windows_10_Default_Profile_Picture.svg.png" class="d-inline-block align-top" alt="">
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('user') }}">My Profile</a>
                    <a class="dropdown-item" href="#">Favorit Saya</a>
                    <div class="dropdown-divider"></div>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item text-danger">Sign out</button>
                    </form>
                  </div>
              @endif
              </li>
          </ul>
      </div>
    </div>
  </nav> --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href=""><img src="/images/logo-text-dark.png" width="86px" alt=""><img src="/images/logo-i.png" width="36px" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link linku" href="/lowongan-explore">Lowongan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link linku" href="/perusahaan">Perusahaan</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @guest
            @if (Route::has('login'))
            <form action="{{ route('login') }}">
              <button class="btn btn-primary nav-link text-white w-100" style="background:#3A6CB9;">Sign In</button>
            </form>
            @endif
          @else
              <li class="nav-item dropdown">
                <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
                  {{-- {{ Auth::userProfile()->first_name }}{{ Auth::userProfile()->last_name }} --}}
                  {{-- username --}}
                  <img src="/images/Windows_10_Default_Profile_Picture.svg.png" width="36px" class="d-inline-block align-top" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" style="font-size: 1.0rem">
                  <div class="dropdown-item d-flex justify-content-between">
                    <a href="/profile">My Profile</a>
                    <img class="align-self-center" src="/icons/dev-icon-233-people.svg" height="15px" alt="">
                  </div>
                  <div class="dropdown-divider"></div>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item text-center text-danger">Sign out</button>
                    </form>
                  </div>
              </li>
            @endguest
        </ul>
    </div>
  </nav>