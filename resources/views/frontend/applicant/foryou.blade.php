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
                    
                    <div class="container p-0 rounded-panel" style="max-height: 800px; background-color: #f8f9fa;">
                        @for ($i = 0; $i < 5; $i++)
                        <div class="pb-2" style="background-color: #f8f9fa;">
                            <div class="card-header">
                                <a href="#"><div class="card-title w-100">Title</div></a>
                                <div class="card-title">Salary</div>
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
                        </div>
                        @endfor
                    </div>
                    
                {{-- </div> --}}
        </div>
        
        <div class="col-md-8" style="background-color: #ECEBEB;">
            Ffaihfihfehuafhiuafhuh
        </div>
        <button class="btn back-to-top" id="backToTopButton">
            <img src="/images/arrow-up-1.png" alt="" width="54px">
        </button>
    </div>
</div>
@endsection