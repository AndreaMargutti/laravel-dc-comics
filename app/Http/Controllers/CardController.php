<?php

namespace App\Http\Controllers;

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

    public function store(Request $request) {
        //dd($request);

        //recupero i risultati del form
        $formData = $request->all();

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

    public function update (Request $request, string $id) {
        $card= Card::findOrFail($id);
        // dd($request);
        $editData = $request->all();

        $card->name = $editData["name"];
        $card->expansion = $editData["expansion"];
        $card->card_type = $editData["card_type"];
        $card->description = $editData["description"];
        $card->update();

        return redirect()->route("cards.show", $card->id);
    }

    public function destroy (string $id) {

        $card = Card::findOrfail($id);
        $card->delete();

        return redirect()->route('cards.index');
    }
}
