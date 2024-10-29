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

        return redirect()->route("cards.index");
    }
}
