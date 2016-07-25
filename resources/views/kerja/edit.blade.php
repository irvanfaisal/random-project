@extends('master')
@section('content')

    <section id="kerja">
        <div class="container">
            <h1>Edit Jawaban</h1>
            <br/>

            {!! Form::model($kerja, ['class'=>'form-horizontal', 'method' => 'PATCH','action' => ['KerjasController@update', $kerja->id]]) !!}
            @include ('partials._form_create')
            {!! Form::close() !!}

            @include('errors.list')

        </div>
    </section>
@stop
