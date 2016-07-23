<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnswersController extends Controller
{
    public function lulus()
    {
        $answers = Answer::where('category','Lulus')
            ->get()
            ->random(1);

        return view('answers.lulus', compact('answers'));
    }

    public function nikah()
    {
        $answers = Answer::where('category','Nikah')
            ->get()
            ->random(1);

        return view('answers.nikah', compact('answers'));
    }

    public function kerja()
    {
        $answers = Answer::where('category','Kerja')
            ->get()
            ->random(1);

        return view('answers.kerja', compact('answers'));
    }
}
