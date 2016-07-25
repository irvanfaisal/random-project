@extends('master')
@section('content')

    <section id="nikah">
        <div class="container">
            <h1>Tambah Jawaban</h1>
            <br/>

            {!! Form::open(['class'=>'form-horizontal', 'url' => 'kapannikah']) !!}
            @include ('partials._form_create')
            {!! Form::close() !!}

            @include('errors.list')

        </div>
    </section>

@stop
