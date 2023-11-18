@extends('frontend.layouts.main')
@section('content')

{{-- @foreach ($lokers as $loker) --}}
<div class="pl-5 nav-scroller py-1 mb-3 border-bottom" style="font-family: KoHo; background: #ABBCCB;">
    <nav class="nav nav-underline justify-content-left">
      <a class="nav-item nav-link low-line active" href="/lowongan-foryou" style="font-weight: 500; color: black; background: linear-gradient(to top, #25477b8d 5.94%, rgba(118, 118, 118, 0) 5.26%);">For You</a>
      <a class="nav-item nav-link" href="/lowongan-explore" style="font-weight: 500; color: rgb(129, 129, 129);">Explore</a>
      <a class="nav-item nav-link low-line" href="/lowongan-bookmark" style="font-weight: 500; color: rgb(129, 129, 129);">Bookmark</a>
    </nav>
</div>
<div class="container-fluid pt-1" style="background-color: #D2DCFF; min-height: 100vh">
    <div class="d-flex rounded-panel pt-2" style="background-color: #ECEBEB; min-height: 100vh">
        <div class="col-sm-4" style="font-family: KoHo">
            <div class="input-group mb-2">
                <input class="form-control py-2 rounded-pill" type="search" placeholder="Search" id="example-search-input">
                <span class="input-group-append">
                    <button class="btn rounded-pill border-0 ml-n5" type="button">
                        <i class="fa fa-search"><img src="/images/search.png" width="24px" alt=""></i>
                    </button>
                </span>
            </div>
                {{-- <div class="container rounded-panel p-3" style="max-height: 800px; background-color: #f8f9fa;"> --}}
                    
                    <div class="container2 p-0 rounded-panel list-group" style="max-height: 800px; background-color: #6f6f6f;">
                        @for ($i = 0; $i < 10; $i++)
                        <div class="pb-2 list-item mb-1" style="background-color: #f8f9fa;">
                            {{-- <a href="#" class="stretched-link"></a> --}}
                            <div class="card-header">
                                <a href="#" class="w-100"><div class="card-title">Title</div></a>
                                <div class="card-title">Salary</div>
                            </div>
                            <div class="card-body">

                                <div class="tag-container align-items-center m-0">
                                    @for ($j = 0; $j < 10; $j++)
                                    <a href="#"><span class="tag">Skill</span></a>
                                    @endfor
                                </div>
                                
                                <div class="d-flex flex-wrap">
                                    <img src="/images/rectangle38.png" alt="">
                                    <div class="flex-row">
                                        <div class="align-self-start"><p class="card-text text-dark ml-2">Nama Perusahaan</p></div>
                                        <div class="align-self-center"><p class="card-text ml-2">Alamat</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                    
                {{-- </div> --}}
        </div>
        
        <div class="col-md-8" style="background-color: #ECEBEB;">
                {{-- <div class="pb-2 list-item h-100" style="background-color: #ECEBEB;">
                    <div class="card-header">
                        <img class="card-title" src="/images/rectangle38.png" style="min-height: 100px" alt="">
                        <h2>Nama Lowongan</h2>
                        <a href="javascript:void()" class="btn btn-primary text-white card-title">Lamar cepat <img src="/images/saved.png" height="24px" alt=""></a>
                    </div>
                    <div class="card-body">
                        <div class="tag-container align-items-center m-0">
                            <a href="#"><span class="tag">Tag 1</span></a>
                            <a href="#"><span class="tag">Tag 2</span></a>
                        </div>
                        <div class="d-flex flex-wrap">
                            <img src="/images/rectangle38.png" alt="">
                            <div class="flex-row">
                                <div class="align-self-start"><p class="card-text text-dark ml-2">Nama Perusahaan</p></div>
                                <div class="align-self-center"><p class="card-text ml-2">Alamat</p></div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            <div class="d-flex flex-wrap justify-content-between pt-5 pb-3" style="font-family: KoHo">
                <div class="nav">
                    <img src="/images/rectangle38.png" style="height: 100px" alt="">
                    <div class="flex-row">
                        <div class="align-self-start"><p class="card-text text-dark ml-2" style="font-size: 30px">Lowongan</p></div>
                        <div class="align-self-end"><a href="#" class="card-text ml-2" style="font-size: 22px; color: #000;">Perusahaan</a></div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="/images/share.png" height="24px" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="/images/save.png" height="24px" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void()" class="btn btn-lamar card-title">Lamar</a>
                    </li>
                </ul>
            </div>
            <div class="container2 pt-5" style="font-family: KoHo; min-height: 500px">
                <h3>Skill :</h3>
                <div class="tag-container flex-wrap align-items-center m-0">
                    @for ($j = 0; $j < 10; $j++)
                    <a href="#"><span class="tag">Tagar tagar tiger 1</span></a>
                    @endfor
                </div>
                
                <h3>Deskripsi :</h3>
                @for($k = 0; $k < 6; $k++)
                <p style="color: #000">Vivamus ullamcorper metus eu mauris tristique commodo. Nam finibus est nec ipsum semper, a 
                    pretium nisl rutrum. Etiam auctor condimentum facilisis. Pellentesque tellus sapien, molestie 
                    at sapien vel, congue elementum ligula. Nam sed bibendum felis, in luctus nulla. Aenean vel sagittis 
                    velit. Proin dapibus rhoncus gravida. Vestibulum posuere varius convallis. Sed molestie varius urna, 
                    a volutpat augue rhoncus vel. Donec lobortis dapibus lorem, ac tempor mauris pharetra ac. 
                    Mauris et orci in est volutpat sollicitudin nec eget risus. Vestibulum sed lacus a nibh lobortis mattis.</p>
                    @endfor
            </div>
        </div>
        <button class="btn back-to-top" id="backToTopButton">
            <img src="/images/arrow-up-1.png" alt="" width="54px">
        </button>
    </div>
</div>
@endsection