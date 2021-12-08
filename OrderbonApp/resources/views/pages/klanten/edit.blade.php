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

                            <form action="/klanten/{{$klanten->id}}" method="post">
                                @method('PATCH')
                                @include('pages.klanten.form')
                            </form>

                            @if($errors->any())
                            <div class="container-fluid">
                                {!! implode('', $errors->all(
                                '<div class="col-lg-11 alert alert-primary text-center" style="margin: 20px"
                                    role="alert">
                                    :message
                                </div>
                                ')) !!}
                            </div>
                            @endif
                            @if ($message = session('success'))
                            <div class="container-fluid">
                                '
                                <div class="col-lg-11 alert alert-success text-center" style="margin: 20px"
                                    role="alert">
                                    {{$message}}
                                </div>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
