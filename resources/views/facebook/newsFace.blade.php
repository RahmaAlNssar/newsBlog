@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    Empty</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-body">

                    <div id="fb-root"></div>
                    <div id="facebookNews">

                    </div>

                </div>

            </div>
            <!-- row closed -->
        </div>
        <!-- Container closed -->
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
