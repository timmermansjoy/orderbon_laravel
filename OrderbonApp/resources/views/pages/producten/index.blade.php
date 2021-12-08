@extends('layouts.app', ['activePage' => 'producten', 'titlePage' => __('')])
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h3 class="card-title mt-0" style="text-transform:capitalize;">{{$title}}</h3>
                        <div class="td-actions text-right">
                            <a href="/producten/create">
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
                                    <th class="">
                                        Naam
                                    </th>
                                    <th class="text-center">
                                        Eenheid
                                    </th>
                                    <th class="text-center">
                                        Product SKU
                                    </th>
                                    <th class="text-right">
                                        Actions
                                    </th>

                                </thead>
                                <tbody>

                                    @foreach($producten as $product)
                                    <tr>
                                        <td>
                                            <a href="/producten/{{$product->id}}"> {{$product->name}} </a>
                                        </td>
                                        <td class="text-center">
                                            {{$product->unit}}
                                        </td>
                                        <td class="text-center">
                                            {{$product->SKU}}
                                        </td>

                                        <td class="td-actions text-right">
                                            <a href="/producten/{{$product->id}}/edit">
                                                <button type="button" title="edit" class="btn btn-info btn-link btn-sm">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <button type="button" title="Remove" class="btn btn-danger btn-link btn-sm"
                                                data-toggle="modal" data-target="#{{$product->id}}">
                                                <i class="material-icons">delete</i>
                                            </button>

                                            <!-- Delete dialog -->
                                            @include('layouts.CustomNYBE.Delete',['item' => $product])
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div style="display: grid; place-items: center;">{{$producten->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
