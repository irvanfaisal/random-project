<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lulus;
use App\Http\Requests;
use App\Http\Requests\AnswerRequest;

class LulusesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'index',
        ]]);
    }

    public function index()
    {
        $answers = Lulus::all()->random(1);

        return view('lulus.index', compact('answers'));
    }

    public function store(AnswerRequest $request)
    {
        Lulus::create($request->all());

        return redirect('kapanlulus');
    }

    public function create()
    {
        return view('lulus.create');
    }

    public function edit($id)
    {
        $lulus = Lulus::whereId($id)->firstOrFail();

        return view('lulus.edit', compact('lulus'));
    }

    public function update($id, AnswerRequest $request)
    {
        $lulus = Lulus::whereId($id)->firstOrFail();
        $lulus->update($request->all());

        return redirect('kapanlulus');
    }

    public function destroy($id)
    {
        $lulus = Lulus::whereId($id)->firstOrFail();
        $lulus->delete();

        return redirect()->back();
    }
}
