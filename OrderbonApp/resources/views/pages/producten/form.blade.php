@csrf
<div class="row align-items-end">
    <div class="col">
        <div class="form-group">
            <label for="naam">naam</label>
            <input type="text" class="form-control" name="name" id="naam" autocomplete="off"
                value="{{old('name') ?? $producten->name}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="SKU">SKU nummer</label>
            <input type="text" class="form-control" name="SKU" id="SKU" autocomplete="off"
                value="{{old('SKU') ?? $producten->SKU}}">
        </div>
    </div>
</div>

<div class="row align-items-end">
    <div class="col">
        <div class="form-group">
            <label for="exact_ref_nr">Referentie Exact</label>
            <input type="text" class="form-control" name="exact_ref_nr" id="exact_ref_nr" autocomplete="off"
                value="{{old('exact_ref_nr') ?? $producten->exact_ref_nr}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="unit">Hoeveelheid</label>
            <input type="text" class="form-control" name="unit" id="unit" autocomplete="off"
                value="{{old('unit') ?? $producten->unit}}">
        </div>
    </div>
</div>

<div class="row align-items-end">
    <div class="col">
        <div class="form-group">
            <label for="description">Uitgebreide info</label>
            <textarea type="text" class="form-control" name="description" id="description" autocomplete="off"
                rows="4">{{old('description') ?? $producten->description}}</textarea>
        </div>
    </div>
</div>

<div class="row align-items-end">
    <div class="col">
        <div class="form-group">
            <label for="stockLocation">Stock Locatie</label>
            <input type="text" class="form-control" name="stockLocation" id="stockLocation" autocomplete="off"
                value="{{old('street') ?? $producten->stockLocation}}">
        </div>
    </div>
    <div class="col text-right ">
        <button type="submit" class="btn btn-primary "><i class=" material-icons">save</i> Save</button>
    </div>
</div>
