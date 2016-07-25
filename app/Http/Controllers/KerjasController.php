<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kerja;
use App\Http\Requests;
use App\Http\Requests\AnswerRequest;

class KerjasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'index',
        ]]);
    }

    public function index()
    {
        $answers = Kerja::all()->random(1);

        return view('kerja.index', compact('answers'));
    }

    public function store(AnswerRequest $request)
    {
        Kerja::create($request->all());

        return redirect('kerjaapa');
    }

    public function create()
    {
        return view('kerja.create');
    }

    public function edit($id)
    {
        $kerja = Kerja::whereId($id)->firstOrFail();

        return view('kerja.edit', compact('kerja'));
    }

    public function update($id, AnswerRequest $request)
    {
        $kerja = Kerja::whereId($id)->firstOrFail();
        $kerja->update($request->all());

        return redirect('kerjaapa');
    }

    public function destroy($id)
    {
        $kerja = Kerja::whereId($id)->firstOrFail();
        $kerja->delete();

        return redirect()->back();
    }
}
