<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgoController extends Controller
{
    public function bubbleSort() {
        return view('sort.bubble');
    }
}
