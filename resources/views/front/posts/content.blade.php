@extends('front.layouts.master')
@section('title')
    الخبرية
@endsection
@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item " aria-current="page"><a href="#">الاخبار</a></li>
                        <li class="breadcrumb-item active" aria-current="page">الخبر</li>
                    </ol>
                </nav>

            </div>
        </div>
        <div class="row text-center mb-3">
            <img src="{{ asset('front/img/12144.jpg') }}" width="60%" height="90" alt="" class=" m-auto">
        </div>
        <div class="row mt-1" style="background: rgba(238, 238, 238, 0.74);">

            <div class="col-md-8 pt-3">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h4 class="text-success my-4 font-weight-bold">{{ $post->title }}</h4>
                        <img style="width:500 ; height:300 ;" src="{{$post->getMedia('images') }}">
                        
                        <p class="mt-5"> {{ $post->content }}</p>
                    </div>

                </div>
            </div>
            </h3>

            <div class="col-md-12 bg-white">
                <div class="h3 w-100 py-2 bg-light pr-2 text-info">اعلانات</div>
            </div>
        </div>
        {{-- start --}}
        <div class="col-md-4 ">
            <div class="list-Latest-news-title mr-0 my-3">
                <a href="" class="text-white"> الفيسبوك</a>
            </div>
            <div class="col-md-12  bg-white">
                <div class="card" style="width: 100%">
                    <ul class="list-group list-group-flush p-0" style="position: relative;">

                        <a href="">

                            <li class="list-group-item d-flex flex-row">



                            </li>



                        </a>


                </div>
            </div>
            <div class="col-md-12 bg-white">
                <div class="h3 w-100 py-2 bg-light pr-2 text-info">اعلانات</div>
            </div>
        </div>
        {{-- end --}}
    </div>
    </div>
@endsection
