<div class="card-header card-header-primary">
    <h3 class="card-title mt-0" style="text-transform:capitalize;">{{$title}}</h3>
    <div class="td-actions text-right">
        <a href="/orders/create">
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
                    ID
                </th>
                <th>
                    Type
                </th>
                <th class="text-lg-center">
                    Klant
                </th>
                <th class="text-lg-center">
                    Datum
                </th>
                <th class="text-lg-center">
                    Getekend door
                </th>
                <th class="text-right">
                    Actions
                </th>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>
                        <a href="/orders/{{ $order->id }}"> {{ $order->id }} </a>
                    </td>

                    <td>
                        {{ $order->type }}
                    </td>

                    <td class="text-lg-center">
                        {{ $order->customer->name ?? 'ERROR PRODUCT NOT FOUND'}}
                    </td>

                    <td class="text-center">
                        {{  date('d-m-Y', strtotime($order->created_at))  }}
                    </td>

                    <td class="text-center">
                        {{ $order->sign_first_name . ' ' . $order->sign_last_name }}
                    </td>
                    @if ($order->type == 'leverbon')
                    <td class="td-actions text-right">
                        <a href="/orders/{{$order->id}}/edit">
                            <button type="button" title="edit" class="btn btn-info btn-link btn-sm">
                                <i class="material-icons">edit</i>
                            </button>
                        </a>
                        <button type="button" title="Remove" class="btn btn-danger btn-link btn-sm" data-toggle="modal"
                            data-target="#{{$order->id}}">
                            <i class="material-icons">delete</i>
                        </button>
                        <!-- Delete dialog -->
                        @include('layouts.CustomNYBE.Delete',['item' => $order])
                    </td>
                    @endif
                    @if ($order->type == 'orderbon')
                    <td class="td-actions text-right">
                        <button type="button" title="Remove" class="btn btn-danger btn-link btn-sm" data-toggle="modal"
                            data-target="#{{$order->id}}">
                            <i class="material-icons">cloud_download</i>
                        </button>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="display: grid; place-items: center;">{{$orders->links()}}</div>
    </div>
</div>
