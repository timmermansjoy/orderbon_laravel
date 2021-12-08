@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Material Dashboard')])

@section('content')
<div class="container" style="height: auto;">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-8">
            <h1 class="text-white text-center">{{ __('NYBE') }}</h1>
            <blockquote class="blockquote text-center">
                <p class="mb-0"> <b> NOT JUST ANOTHER AGENCY. </b> </p>
            </blockquote>
        </div>
    </div>
</div>
@endsection
