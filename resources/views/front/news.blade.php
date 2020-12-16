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
        <img src="{{asset('front/img/12144.jpg')}}" width="60%" height="90" alt="" class=" m-auto">
    </div>
    <div class="row mt-1" style="background: rgba(238, 238, 238, 0.74);">

        <div class="col-md-8 pt-3">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <h4 class="text-success my-4 font-weight-bold">السعودية.. أسرار كتابات ونقوش "غامضة" وجدت في العلا</h4>
                    <img src="{{asset('front/img/nnn.jpg')}}" class="img-fluid" alt="">
                    <p class="mt-5">ربما لم يسمع كثيرون بمحافظة العلا السعودية، التابعة لمنطقة المدينة المنورة، ولكن المكان استوطنه البشر منذ 6000 سنة.
                        والمنطقة مغطاة بالصخور الأثرية التي تمتد لمساحة 9000 ميل مربع، في شمال غرب المملكة، تلك الصخور التي تحتوي على رسومات وكتابات غامضة يعود تاريخها إلى ما قبل 6 آلاف سنة.</p>
                </div>
                <div class="col-md-12 mb-5">
                    <h4 class="text-success my-4 font-weight-bold">السعودية.. أسرار كتابات ونقوش "غامضة" وجدت في عجائب مدائن صالح</h4>
                    <p class="my-3">وأحد المواقع المهمة هو "مدائن صالح"، الذي يضم 111 مقبرة قديمة محفورة في الصخور وتعتبر مثيرة للإعجاب، وتم تسجيلها كموقع ضمن مواقع التراث العالمي لليونسكو.</p>
                    <img src="{{asset('front/img/nnn2.jpg')}}" class="img-fluid mb-3" alt="">
                    <img src="{{asset('front/img/nnn1.jpg')}}" class="img-fluid mb-3" alt="">
                    <p class="mt-5">وتصف اليونسكو الموقع بأنه "أكبر مستوطنة لحضارة الأنباط في جنوب البتراء في الأردن، يتضمن مقابر ضخمة محفوظة بشكل جيد مع واجهات مزخرفة تعود إلى الفترة من القرن الأول قبل الميلاد إلى القرن الأول الميلادي".
                        ويحتوي الموقع على حوالي 50 نقشاً من فترة ما قبل النبطية وبعض رسومات الكهوف.</p>
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
