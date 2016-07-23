<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lulus;
use App\Http\Requests;

class LulusesController extends Controller
{
    public function index()
    {
        $answers = Lulus::all()->random(1);

        return view('lulus.index', compact('answers'));
    }
}
