@extends('frontend.layouts.main')
@yield('active')

@section('content')

{{-- @foreach ($lokers as $loker) --}}
<div class="pl-5 nav-scroller py-1 mb-3 border-bottom" style="font-family: KoHo; background: #ABBCCB;">
    <nav class="nav nav-underline justify-content-left">
    @guest
        @if (Route::has('login'))
            <a class="nav-item nav-link low-line" href="/lowongan-foryou" style="font-weight: 500; color: rgb(129, 129, 129);">For You</a>
            <a class="nav-item nav-link active" style="font-weight: 500; color: black; background: linear-gradient(to top, #25477b8d 5.94%, rgba(118, 118, 118, 0) 5.26%);" href="/lowongan-explore">Explore</a>
        @endif
    @else
        <a class="nav-item nav-link low-line" href="/lowongan-foryou" style="font-weight: 500; color: rgb(129, 129, 129);">For You</a>
        <a class="nav-item nav-link active" style="font-weight: 500; color: black; background: linear-gradient(to top, #25477b8d 5.94%, rgba(118, 118, 118, 0) 5.26%);" href="/lowongan-explore">Explore</a>
        <a class="nav-item nav-link low-line" href="/lowongan-bookmark" style="font-weight: 500; color: rgb(129, 129, 129);">Bookmark</a>
    @endguest
    </nav>
</div>
<div class="container-fluid" style="background-color: #D2DCFF; min-height: 100vh">
    <div class="col-md-4 pt-3">
        <div class="input-group">
            <input class="form-control py-2 rounded-pill" type="search" placeholder="Search" id="example-search-input">
            <span class="input-group-append">
                <button class="btn rounded-pill border-0 ml-n5" type="button">
                    <i class="fa fa-search"><img src="/images/search.png" width="24px" alt=""></i>
                </button>
            </span>
        </div>
    </div>
    <div class="d-flex">
        <div class="col-lg-3 col-12 rounded-panel-e float-left sidebar style" style="background-color: #f8f9fa;">
            <h2></h2>
        </div>
        <div class="rounded-panel-e" style="background-color: #D2DCFF;">
            <div class="row">
                @for ($i = 0; $i < 5; $i++)
                <div class="col-md-4">
                    
                    <div class="card">
                        <a href="#" class="spectrum-a stretched-link"></a>
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
                        
                        <div class="card-footer d-sm-flex justify-content-between">
                            <div class="card-footer-link mb-4 mb-sm-0">
                                <p class="card-text text-seccondary d-inline fs-9">Last updated 3 mins ago</p>
                            </div>
                            <a href="javascript:void()" class="btn"><img src="/images/saved.png" height="24px" alt=""></a>
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
@endsection