@extends('layouts.app', ['activePage' => 'orders', 'titlePage' => __('')])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card ">
                    @include('pages.orders.card')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
