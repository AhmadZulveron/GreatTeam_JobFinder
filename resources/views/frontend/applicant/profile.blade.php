@extends('frontend.layouts.main')
@yield('active')

@section('content')

<div class="row" style="background: #D8ECFF; font-family: KoHo">
    <div class="container-fluid">
        <div class="row mt-5 mb-5 ml-5 mr-5" style="background: #D8ECFF">
            <div class="col-sm-2">
                <img src="/images/Windows_10_Default_Profile_Picture.svg.png" id="upload" height="200px" style="max-width: 200px" class="rounded-circle" alt="upload">
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <h2>Nama Pelamar</h2>
                    <div class="tag-container align-items-center m-0">
                        <a href="#"><span class="tag">Tag 1</span></a>
                        <a href="#"><span class="tag">Tag 2</span></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 text-end">
                <a href="#"><img src="/images/gear.png" alt=""></a>
            </div>
        </div>
        <div class="row" style="background: #FFF;">
            <h3>Description</h3>
            <p>Suspendisse facilisis bibendum fringilla. Nullam aliquam ligula at ante condimentum lobortis. Ut scelerisque
                augue sit amet semper dapibus. Sed tristique auctor nisi sit amet condimentum. Vestibulum egestas dignissim
                elit in placerat. Praesent rutrum egestas venenatis. Etiam tincidunt ligula a dignissim venenatis. Vestibulum
                ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin ac leo sit amet sapien aliquam
                accumsan at at ante. Pellentesque et massa et nibh pellentesque sollicitudin ut id ligula. Ut elementum molestie
                nisi, vitae varius est posuere id. Fusce ac dapibus turpis, et tristique mi. Praesent accumsan ligula dolor, eget
                commodo purus pulvinar vel. Sed vitae sollicitudin massa. Proin egestas tristique gravida. Morbi a magna a quam
                semper posuere. Fusce imperdiet nisi in aliquam fermentum. Cras eget est vel magna vestibulum rhoncus. Donec
                ultricies libero et libero consectetur fringilla. Nam at diam eget libero viverra finibus pulvinar quis lorem.
                Nullam sed eros sit amet nunc pretium finibus et et odio. Proin ut dolor auctor. Vestibulum egestas dignissim elit
                in placerat. Praesent rutrum egestas venenatis. Etiam tincidunt ligula a dignissim venenatis. Vestibulum ante ipsum
                primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin ac leo sit amet sapien aliquam accumsan at
                at ante. Pellentesque et massa et nibh pellentesque sollicitudin ut id ligula. Ut elementum molestie nisi, vitae
                varius est posuere id. Fusce ac dapibus turpis, et tristique mi. Praesent accumsan ligula dolor, eget commodo purus
                pulvinar vel. Sed vitae sollicitudin massa. Proin egestas tristique gravida.</p>
        </div>
    </div>
</div>

@endsection