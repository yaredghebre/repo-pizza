<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index() {
            $pizzas = Pizza::all();
            return view('home', compact('pizzas'));
    }

}
