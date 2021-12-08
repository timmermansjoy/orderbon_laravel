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
                            <div class="row align-items-end">
                                <div class="col">
                                    <label for="exampleFormControlInput1">BTW Nummer</label>
                                    <p style="margin-top: -8px">{{$klanten->vatid}}</p>
                                </div>
                                <div class="col">
                                    <label for="Telefoon">Telefoon Nr</label>
                                    <p style="margin-top: -8px">{{$klanten->phonenumber}}</p>
                                </div>
                            </div>

                            <div class="row align-items-end">
                                <div class="col">
                                    <label for="Klantenummer">Klantenummer Exact</label>
                                    <p style="margin-top: -8px">{{$klanten->exactid}}</p>
                                </div>
                                <div class="col">
                                    <label for="Email">Email</label>
                                    <p style="margin-top: -8px">{{$klanten->email}}</p>
                                </div>
                            </div>

                            <div class="row align-items-end">
                                <div class="col">
                                    <label for="voornaam">Voornaam bedrijfsleider</label>
                                    <p style="margin-top: -8px">{{$klanten->ceo_first_name}}</p>
                                </div>
                                <div class="col">
                                    <label for="Achternaam">Achternaam bedrijfsleider</label>
                                    <p style="margin-top: -8px">{{$klanten->ceo_last_name}}</p>
                                </div>
                            </div>

                            <div class="row align-items-end">
                                <div class="col">
                                    <label for="straat">Straat + Nr</label>
                                    <p style="margin-top: -8px">{{$klanten->street}}</p>
                                </div>
                                <div class="col">
                                    <label for="Gemeente">Gemeente</label>
                                    <p style="margin-top: -8px">{{$klanten->city}}</p>
                                </div>
                            </div>

                            <div class="row align-items-end">
                                <div class="col">
                                    <label for="Postcode">Postcode</label>
                                    <p style="margin-top: -8px">{{$klanten->postal_code}}</p>
                                </div>

                                <div class="col">
                                    <label for="Postcode">Land</label>
                                    <p style="margin-top: -8px">{{$klanten->country}}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="/klanten">
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
</div>
@endsection
