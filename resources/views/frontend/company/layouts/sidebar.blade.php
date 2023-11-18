<div class="quixnav" style="background: #1C2D4D;">
    <div class="quixnav-scroll">
        <div class="">
            <li class="nav-item dropdown header-profile">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                    <img class="logo-abbr" width="34px" src="/images/Windows_10_Default_Profile_Picture.svg.png" alt="">
                    <i class="brand-title" style="color: white">Perusahaan</i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <i class="icon-user"></i>
                        <span class="ml-2">Profile </span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="icon-envelope-open"></i>
                        <span class="ml-2">Inbox </span>
                    </a>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">
                            <i class="icon-key"></i>
                            <span class="ml-2">Logout </span>
                        </button>
                    </form>

                </div>
                
            </li>
        </div>
        <hr style="background: white; height: 0.1rem; border-radius: 50px; margin-left: 10px; margin-right: 10px">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li><a href="/perusahaan-dashboard" aria-expanded="false">
                <i class="icon icon-single-04"><img src="/images/dashboard.png" height="16px" alt=""></i><span class="nav-text">Dashboard</span></a></li>
            <li class="nav-label">Apps</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"><img src="/images/pemohon.png" height="16px" alt=""></i><span class="nav-text">Pelamar</span></a>
                <ul aria-expanded="false">
                    <li><a href="#">Cari Pelamar</a></li>
                    <li><a href="pemohon" aria-expanded="false">Pemohon</a></li>
                    <li><a href="#">Diterima</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-chart-bar-33"><img src="/images/add.png" height="16px" alt=""></i><span class="nav-text">Lowongan</span></a>
                <ul aria-expanded="false">
                    <li><a href="/perusahaan-lowongan">Tambah Lowongan</a></li>
                    <li><a href="#">Lowongan Dihapus</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>