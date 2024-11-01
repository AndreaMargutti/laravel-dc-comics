@extends('layouts.app')

@section('main-content')
<div class="container-fluid text-center">
    <div class="card py-3 mb-3">
        <div class="card-body">
          <h5 class="card-title">{{$card->name}}</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">{{$card->card_type}}</h6>
          <p class="card-text">{{$card->description}}</p>
          <a href="#" class="card-link">{{$card->expansion}}</a>
        </div>
    </div>
    <div>
        <button class="btn btn-primary">
            <a href="{{route('cards.index')}}">Back to Index</a>
        </button>
    </div>
</div>
@endsection
