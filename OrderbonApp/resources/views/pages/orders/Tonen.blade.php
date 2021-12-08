@extends('layouts.app', ['activePage' => 'orders', 'titlePage' => __('')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">


            <div class="col-md-11 ">
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h3 class="card-title mt-0">{{$order->id . '. ' . $order->customer->name}}</h3>
                        <p class="category">{{$order->type}}</p>
                    </div>

                    <div class="card-body">
                        <div class="">
                            <div class="row align-items-end">
                                <div class="col">
                                    <label for="exampleFormControlInput1">reference</label>
                                    <p style="margin-top: -8px">{{$order->reference}}</p>
                                </div>
                                <div class="col">
                                    <label for="voornaam">hours</label>
                                    <p style="margin-top: -8px">{{$order->hours}}</p>
                                </div>
                            </div>

                            <div class="row align-items-end">
                                <div class="col">
                                    <label for="Klantenummer">getekend op</label>
                                    <p style="margin-top: -8px">{{ $order->created_at}}</p>
                                </div>
                                <div class="col">
                                    <label for="Email">KM</label>
                                    <p style="margin-top: -8px">{{$order->KM}}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>
                                                Naam
                                            </th>
                                            <th class="text-lg-center">
                                                eenheid
                                            </th>
                                            <th class="text-lg-right">
                                                aantal
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                </td>

                                                <td class="text-lg-center">
                                                </td>

                                                <td class="text-lg-right">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row align-items-end">
                                <img id="sig-image" src="{{$order->signiture}}" alt="Your signature will go here!" />
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="{{ url()->previous() }}">
                                        <button class="btn btn-primary">
                                            <i class="material-icons">arrow_back</i> back
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
