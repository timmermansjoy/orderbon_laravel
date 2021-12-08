@extends('layouts.app', ['activePage' => 'producten', 'titlePage' => __('')])

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
                            <div class="row align-items-end">
                                <div class="col">
                                    <label for="">SKU nummer</label>
                                    <p style="margin-top: -8px">{{$producten->SKU}}</p>
                                </div>
                                <div class="col">
                                    <label for="">Referentie Exact</label>
                                    <p style="margin-top: -8px">{{$producten->exact_ref_nr}}</p>
                                </div>
                            </div>

                            <div class="row align-items-end">
                                <div class="col">
                                    <label for="">Hoeveelheid</label>
                                    <p style="margin-top: -8px">{{$producten->unit}}</p>
                                </div>
                                <div class="col">
                                    <label for="">Stock Locatie</label>
                                    <p style="margin-top: -8px">{{$producten->stockLocation}}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="">Uitgebreide info</label>
                                    <p style="margin-top: -8px">{{$producten->description}}</p>
                                </div>
                            </div>

                            <div class="row align-items-start">
                                <div class="col">
                                    <a href="/producten">
                                        <button class="btn btn-primary">
                                            <i class="material-icons">arrow_back</i> back
                                        </button></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
