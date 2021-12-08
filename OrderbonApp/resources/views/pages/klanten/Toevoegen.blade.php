@extends('layouts.app', ['activePage' => 'klanten', 'titlePage' => __('')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11 ">
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h3 class="card-title mt-0">{{$title}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="">

                            <form action="/klanten" method="POST">
                                @include('pages.klanten.form')
                            </form>

                            @include('pages.error')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
