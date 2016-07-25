@extends('master')
@section('content')

    <section id="nikah">
        <div class="container">
            <h1>Edit Jawaban</h1>
            <br/>

            {!! Form::model($nikah, ['class'=>'form-horizontal', 'method' => 'PATCH','action' => ['NikahsController@update', $nikah->id]]) !!}
            @include ('partials._form_create')
            {!! Form::close() !!}

            @include('errors.list')

        </div>
    </section>
@stop
