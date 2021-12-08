@csrf
<div class="row align-items-end">
    <div class="col">
        <div class="form-group">
            <label for="Bedrijfsnaam">Bedrijfsnaam</label>
            <input type="text" class="form-control" name="name" id="Bedrijfsnaam" autocomplete="off"
                value="{{old('name') ?? $klanten->name}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="BTWNummer">BTW Nummer</label>
            <input type="text" class="form-control" name="vatid" id="BTWNummer" autocomplete="off"
                value="{{old('vatid') ?? $klanten->vatid}}">
        </div>
    </div>
</div>

<div class="row align-items-end">
    <div class="col">
        <div class="form-group">
            <label for="Klantenummer">Klantenummer Exact</label>
            <input type="text" class="form-control" name="exactid" id="Klantenummer" autocomplete="off"
                value="{{old('exactid') ?? $klanten->exactid}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" name="email" id="Email" autocomplete="off"
                value="{{old('email') ?? $klanten->email}}">
        </div>
    </div>
</div>

<div class="row align-items-end">
    <div class="col">
        <div class="form-group">
            <label for="voornaam">Voornaam bedrijfsleider</label>
            <input type="text" class="form-control" name="ceo_first_name" id="voornaam" autocomplete="off"
                value="{{old('ceo_first_name') ?? $klanten->ceo_first_name}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="Achternaam">Achternaam bedrijfsleider</label>
            <input type="text" class="form-control" name="ceo_last_name" id="Achternaam" autocomplete="off"
                value="{{old('ceo_last_name') ?? $klanten->ceo_last_name}}">
        </div>
    </div>
</div>

<div class="row align-items-end">
    <div class="col">
        <div class="form-group">
            <label for="straat">Straat + Nr</label>
            <input type="text" class="form-control" name="street" id="straat" autocomplete="off"
                value="{{old('street') ?? $klanten->street}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="Gemeente">Gemeente</label>
            <input type="text" class="form-control" name="city" id="Gemeente" autocomplete="off"
                value="{{old('city') ?? $klanten->city}}">
        </div>
    </div>
</div>

<div class="row align-items-end">
    <div class="col">
        <div class="form-group">
            <label for="Postcode">Postcode</label>
            <input type="text" class="form-control" name="postal_code" id="Postcode" autocomplete="off"
                value="{{old('postal_code') ?? $klanten->postal_code}}">
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            <label for="Postcode">Land</label>
            <input type="text" class="form-control" name="country" id="inputState" autocomplete="off" maxlength="2"
                value="{{old('country') ?? $klanten->country ?? 'BE'}}">
        </div>
    </div>
</div>

<div class="row align-items-end">
    <div class="col">
        <div class="form-group">
            <label for="Telefoon">Telefoon Nr</label>
            <input type="text" class="form-control" name="phonenumber" id="Telefoon" autocomplete="off" type="text"
                value="{{old('phonenumber') ?? $klanten->phonenumber}}">
        </div>
    </div>

    <div class="col text-right ">
        <button type="submit" class="btn btn-primary "><i class=" material-icons">save</i> Save</button>
    </div>
</div>
