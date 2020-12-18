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
                <h4 class="text-success my-4 font-weight-bold">{{App\Models\Post::latest()->first()->title}}</h4>
                    <img src="{{App\Models\Post::latest()->first()->image}}" class="img-fluid" alt="">
                   
                    <p class="mt-5">{{App\Models\Post::latest()->first()->content}}</p>
                </div>
        
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="list-Latest-news-title mr-0 my-3">
                <a href="" class="text-white">أخر الاخبار</a>
            </div>
            <div class="col-md-12  bg-white" >
                <div class="card" style="width: 100%">
                    <ul class="list-group list-group-flush p-0" style="position: relative;">
                        @foreach($posts as $post)
                    <a href="{{url('display_post_content')}}/{{$post->id}}">
                           
                            <li class="list-group-item d-flex flex-row">
                               
                            <h3> {{$post->title}}</h3> 
                          
                           
                           
                             </li>
                          <hr>
                        </a>
                        @endforeach
                    </ul>
                </div>
            </div>
           
        </div>
        {{-- start --}}
        <div class="col-md-4 ">
            <div class="list-Latest-news-title mr-0 my-3">
                <a href="" class="text-white"> الفيسبوك</a>
            </div>
            <div class="col-md-12  bg-white">
                <div class="card" style="width: 100%">
                   
                    <div id="fb-root"></div>
                    <div id="facebookNews">

                    </div>
                      <hr>
                </div>
            </div>
            
        </div>
        {{-- end --}}
    </div>
</div>
@endsection
@section('js')
    <!--ddd-->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v9.0'
            });
        };

    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0"
        nonce="aJiF5slk"></script>

    <script>
        $(document).ready(function() {

            $.ajax({
                url: "{{ route('postLinks.fetch') }}",
                type: "GET",
                dataType: "json",
                success: function(data) {

                    for (let i = 0; i < data.data.length; i++) {
                        let result = `<div class="fb-post"
                                         data-href="${data.data[i].post_link}"
                                         data-width="500">
                                        </div>`;
                        $('#facebookNews').append(result);

                        console.log(result);
                    }

                },
            });

        });

    </script>
@endsection
