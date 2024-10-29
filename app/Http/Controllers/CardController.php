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
}