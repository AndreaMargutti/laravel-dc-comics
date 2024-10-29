<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home() {
        return view('pages.home');
    }
}
