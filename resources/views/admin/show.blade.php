@extends('master')

@section('content')

    <section id="admin">
        <div class="container">
            <h3>{{ $answer }}</h3>
            @unless($answer != 'Nikah')
                @include('partials._list_answer', ['url' => 'kapannikah', 'controller' => 'NikahsController@destroy'])
            @endunless
            @unless($answer != 'Kerja')
                @include('partials._list_answer', ['url' => 'kerjaapa', 'controller' => 'KerjasController@destroy'])
            @endunless
            @unless($answer != 'Lulus')
                @include('partials._list_answer', ['url' => 'kapanlulus', 'controller' => 'LulusesController@destroy'])
            @endunless
        </div>
    </section>

   @stop
