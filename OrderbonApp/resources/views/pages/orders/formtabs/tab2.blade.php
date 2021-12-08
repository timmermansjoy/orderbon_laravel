<div class="row align-items-end">
    <div class="col">
        <table class="table table-hover">
            <thead>
                <th>
                    Naam
                </th>
                <th>
                    eenheid
                </th>
                <th class="text-lg-center">
                    aantal
                </th>
                <th class="text-right">
                    Actions
                </th>
            </thead>
            <tbody>
                <tr>
                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td class="td-actions text-right">
                        <a href="">
                            <button type="button" title="edit" class="btn btn-success btn-link btn-sm">
                                <i class="material-icons">add_circle</i>
                            </button>
                        </a>
                        <a href="">
                            <button type="button" title="edit" class="btn btn-info btn-link btn-sm">
                                <i class="material-icons">remove_circle</i>
                            </button>
                        </a>
                        <button type="button" title="Remove" class="btn btn-danger btn-link btn-sm" data-toggle="modal"
                            data-target="#">
                            <i class="material-icons">delete</i>
                        </button>
                        <!-- Delete dialog -->
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<div class="row justify-content-center">
    <div class="col">
        <div class="form-group" style="margin-top: -25px">
            <label for="aantal">Product</label>
            <select class="form-control" id="product_id" name="product_id">
                @foreach ($products as $product)
                <option value="{{$product->id}}"
                    {{ (old("customer_id") == $product->id ? "selected":"") ?? $order->customer_id == $product->id ? "selected":""}}>
                    {{$product->name}}</option>
                @endforeach

                {{-- <input type="text" class="form-control" name="products" id="aantal" autocomplete="off"
                        value="{{old('products') ?? $order->products }}"> --}}

            </select>
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            <label for="aantal">aantal</label>
            <input type="text" class="form-control" name="aantal" id="aantal" autocomplete="off"
                value="{{old('products') ?? $order->products}}">
        </div>
    </div>

    <div class="col-md-auto text-align-right">
        <div class="form-group">
            <button type="button" title="Remove" class="btn btn-success" data-toggle="modal" data-target="#">
                <i class="material-icons">add</i>add
            </button>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm">
        <div class="form-group">
            <label for="KM">Gereden KM</label>
            <input type="text" class="form-control required" name="KM" id="KM" autocomplete="off"
                value="{{old('KM') ?? $order->KM ?? '0'}}" onkeyup="validateForm()">
        </div>
    </div>

    <div class="col-sm">
        <div class="form-group">
            <label for="hours">Gepresteerde uren</label>
            <input type="text" class="form-control required" name="hours" id="hours" autocomplete="off"
                value="{{old('hours') ?? $order->hours}}">
        </div>
    </div>
</div>
