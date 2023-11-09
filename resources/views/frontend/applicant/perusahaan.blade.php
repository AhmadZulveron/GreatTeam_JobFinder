@extends('frontend.layouts.main')

@section('content')

<div class="container-fluid" style="background-color: #D2DCFF; font-family: KoHo">
    <div class="col-md-4 pt-3 pl-0">
        <div class="input-group">
            <input class="form-control py-2 rounded-pill mr-1" type="search" placeholder="Search" id="example-search-input">
            <span class="input-group-append">
                <button class="btn rounded-pill border-0 ml-n5" type="button">
                    <i class="fa fa-search"><img src="/images/search.png" width="24px" alt=""></i>
                </button>
            </span>
        </div>
    </div>
    <div class="con">
        <div class="rounded-panel mt-3" style="background-color: #D2DCFF;">
            <div class="row">
                @for ($i = 0; $i < 20; $i++)
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

@endsection