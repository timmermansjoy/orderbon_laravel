@extends('layouts.app', ['activePage' => 'klanten', 'titlePage' => __('')])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h3 class="card-title mt-0" style="text-transform:capitalize;">{{$title}}</h3>
                        <div class="td-actions text-right">
                            <a href="/klanten/create">
                                <button type="button" rel="tooltip" class="btn btn-white">
                                    new <i class=" material-icons">add_box</i>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="">
                                    <th>
                                        Naam
                                    </th>
                                    <th style="padding-left: 30px">
                                        Btw
                                    </th>
                                    <th class="text-right">
                                        Actions
                                    </th>

                                </thead>
                                <tbody>

                                    @foreach($customers as $customer)
                                    <tr>
                                        <td>
                                            <a href="/klanten/{{$customer->id}}"> {{$customer->name}} </a>
                                        </td>
                                        <td>
                                            {{$customer->vatid}}
                                        </td>

                                        <td class="td-actions text-right">
                                            <a href="/klanten/{{$customer->id}}/edit">
                                                <button type="button" title="edit" class="btn btn-info btn-link btn-sm">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <button type="button" title="Remove" class="btn btn-danger btn-link btn-sm"
                                                data-toggle="modal" data-target="#{{$customer->id}}">
                                                <i class="material-icons">delete</i>
                                            </button>

                                            <!-- Delete dialog -->
                                            @include('layouts.CustomNYBE.Delete',['item' => $customer])
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div style="display: grid; place-items: center;">{{$customers->links()}}</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
