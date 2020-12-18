@extends('layouts.master')
@section('css')

@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">فيسبوك</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ مشاركة
                    فيسبوك</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')



    <!-- row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-body">
                 
                    <form action="{{route('postMedia.store')}}" method="post">
						@csrf
						<input type="text" name="post_link" id="post_link" class="form-control"><br>
						<button type="submit" class="btn btn-primary">حفظ</button>
					</form>
                </div>

            </div>
            <!-- row closed -->
        </div>
        <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')


   

@endsection
