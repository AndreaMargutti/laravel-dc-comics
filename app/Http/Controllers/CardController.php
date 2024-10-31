<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCardsRequest;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    //
    public function index() {
        $cards = Card::all();

        return view('cards.index', compact('cards'));
    }

    public function show(string $id) {

        $card = Card::findOrfail($id);
        //dd($card);
        return view('cards.show', compact('card'));
    }

    public function create() {
        return view('cards.create');
    }

    public function store(StoreCardsRequest $request) {
        //dd($request);

        //recupero i risultati del form
        $formData = $request->validated();

        //creo una variabile per una nuova carta
        $card = new Card();

        // # Popolo la nuova carta
        $card->name = $formData["name"];
        $card->expansion = $formData["expansion"];
        $card->card_type = $formData["card_type"];
        $card->description = $formData["description"];
        $card->save();

        return redirect()->route("cards.show", $card->id);
    }

    public function edit(string $id) {
        $card = Card::findOrFail($id);

        return view('cards.edit', compact('card'));
    }

    public function update (StoreCardsRequest $request, string $id) {
        $formData = $request->validated();
        // dd($request);

        $card= Card::findOrFail($id);
        $card->name = $formData["name"];
        $card->expansion = $formData["expansion"];
        $card->card_type = $formData["card_type"];
        $card->description = $formData["description"];
        $card->update();

        return redirect()->route("cards.show", $card->id);
    }

    public function destroy (string $id) {

        $card = Card::findOrfail($id);
        $card->delete();

        return redirect()->route('cards.index');
    }
}