<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kerja;
use App\Http\Requests;

class KerjasController extends Controller
{
    public function index()
    {
        $answers = Kerja::all()->random(1);

        return view('kerja.index', compact('answers'));
    }
}
