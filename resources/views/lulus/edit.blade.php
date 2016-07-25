@extends('master')
@section('content')

    <section id="lulus">
        <div class="container">
            <h1>Edit Jawaban</h1>
            <br/>

            {!! Form::model($lulus, ['class'=>'form-horizontal', 'method' => 'PATCH','action' => ['LulusesController@update', $lulus->id]]) !!}
            @include ('partials._form_create')
            {!! Form::close() !!}

            @include('errors.list')

        </div>
    </section>
@stop
