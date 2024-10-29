@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<div class="container-fluid text-center">
    <h1 class="mb-3">List of ALL the Cards</h1>
    <a href="{{ route('cards.create')}}" class="btn btn-primary btn-lg mb-3">Insert New Card</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Card Name</th>
            <th scope="col">Expansion</th>
            <th scope="col">Card Type</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($cards as $card)
            <tr>
                <th scope="row"> {{$card->name}} </th>
                <td> {{$card->expansion}} </td>
                <td> {{$card->card_type}} </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
