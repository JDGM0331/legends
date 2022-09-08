<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesingController extends Controller
{
    public function index(){
        return view('card.card');
    }
}
