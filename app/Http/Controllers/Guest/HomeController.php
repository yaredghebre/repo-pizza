<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index() {

        return view('home');
    }

}
