<div class="row align-items-end">
    <div class="col">
        <div class="form-group">
            <label for="klant">Klant</label>
            <select class="form-control" id="customer_id" name="customer_id">
                @foreach ($customers as $customer)
                <option value="{{$customer->id}}"
                    {{ (old("customer_id") == $customer->id ? "selected":"") ?? $order->customer_id == $customer->id ? "selected":""}}>
                    {{$customer->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="row align-items-end">
    <div class="col">
        <div class="form-group">
            <label for="reference">Referentie</label>
            <input type="text" class="form-control required" name="reference" id="reference" autocomplete="off"
                value="{{old('reference') ?? $order->reference}}" onkeyup="validateForm()">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="type">Type</label>
            <select class="form-control " data-style="btn btn-link" name="type" id="type">
                @if (old('type') == 'leverbon' || $order->type == 'leverbon')
                <option>orderbon</option>
                <option selected>leverbon</option>
                @else
                <option>orderbon</option>
                <option>leverbon</option>
                @endif

            </select>
        </div>
    </div>
</div>
