@if($errors->any())
<div class="row container-fluid">
    {!! implode('', $errors->all(
    '<div class="col-lg-12 alert alert-primary text-center" style="margin: 5px;" role="alert">
        :message
    </div>
    ')) !!}
</div>
@endif
@if ($message = session('success'))
<div class="row container-fluid">
    <div class="col-lg-12 alert alert-success text-center" style="margin: 20px" role="alert">
        {{$message}}
    </div>
</div>
@endif
