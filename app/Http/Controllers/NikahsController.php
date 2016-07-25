<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nikah;
use App\Http\Requests;
use App\Http\Requests\AnswerRequest;

class NikahsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'index',
        ]]);
    }

    public function index()
    {
        $answers = Nikah::all()->random(1);

        return view('nikah.index', compact('answers'));
    }

    public function store(AnswerRequest $request)
    {
        Nikah::create($request->all());

        return redirect('kapannikah');
    }

    public function create()
    {
        return view('nikah.create');
    }

    public function edit($id)
    {
        $nikah = Nikah::whereId($id)->firstOrFail();

        return view('nikah.edit', compact('nikah'));
    }

    public function update($id, AnswerRequest $request)
    {
        $nikah = Nikah::whereId($id)->firstOrFail();
        $nikah->update($request->all());

        return redirect('kapannikah');
    }

    public function destroy($id)
    {
        $nikah = Nikah::whereId($id)->firstOrFail();
        $nikah->delete();

        return redirect()->back();
    }
}
