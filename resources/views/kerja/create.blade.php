@extends('master')
@section('content')

    <section id="kerja">
        <div class="container">
            <h1>Tambah Jawaban</h1>
            <br/>

            {!! Form::open(['class'=>'form-horizontal', 'url' => 'kerjaapa']) !!}
            @include ('partials._form_create')
            {!! Form::close() !!}

            @include('errors.list')

        </div>
    </section>

@stop
