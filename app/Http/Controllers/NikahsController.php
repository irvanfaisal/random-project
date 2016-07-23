<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nikah;
use App\Http\Requests;

class NikahsController extends Controller
{
    public function index()
    {
        $answers = Nikah::all()->random(1);

        return view('nikah.index', compact('answers'));
    }
}
