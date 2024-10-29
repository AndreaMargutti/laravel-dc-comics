@extends('layouts.app')

@section('main-content')
<div class="container text-center">
    <form action="{{route("cards.store")}}" method="POST">
        @csrf

        <label for="card-name" class="form-label">Card Name</label>
        <input type="text" id="card-name" name="name" class="form-control">

        <label for="card-expansion" class="form-label">Card Expansion</label>
        <input type="text" id="card-expansion" name="expansion" class="form-control">

        <label for="card-type" class="form-label">Card Type</label>
        <input type="text" id="card-type" name="card_type" class="form-control">

        <label for="card-description" class="form-label">Card Description</label>
        <input type="textarea" id="card-description" name="description" class="form-control">

        <div class="py-3">
            <button type="submit" class="btn btn-success">Inserisci Carta</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </div>
    </form>
</div>

@endsection
