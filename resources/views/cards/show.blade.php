@extends('layouts.app')

@section('main-content')
<div class="container-fluid text-center">

</div>
<div class="card">
    <div class="card-body">
      <h5 class="card-title">{{$card->name}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">{{$card->card_type}}</h6>
      <p class="card-text">{{$card->description}}</p>
      <a href="#" class="card-link">{{$card->expansion}}</a>
    </div>
  </div>
@endsection
