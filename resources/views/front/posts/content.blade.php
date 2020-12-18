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
      
        <div class="row mt-1" style="background: rgba(238, 238, 238, 0.74);">

            <div class="col-md-8 pt-3">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h4 class="text-success my-4 font-weight-bold">{{ $post->title }}</h4>
                       
                        <img style="width:500 ; height:300 ;" src="http://localhost:8000/storage/app/public/upload/order_column/file_name">
                        <p class="mt-5"> {{ $post->content }}</p>
                    </div>

                </div>
            </div>
            </h3>

            
        </div>
        
    </div>
    </div>
@endsection
