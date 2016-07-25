<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function show($answer)
    {
        $class= "App\\" . $answer;
        $lists = $class::orderBy('created_at', 'desc')->paginate(50);

        return view('admin.show', compact('answer', 'lists'));
    }
}
