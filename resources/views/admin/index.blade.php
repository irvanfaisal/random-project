@extends('master')y
@section('content')
    <section id="admin">
        <div class="container">
            <h2>Admin</h2><br/>
            <h4><a href="{{ url('',['admin', 'Lulus']) }}" class="btn btn-default" aria-label="Left Align">Kapan Lulus?</a></h4>
            <h4><a href="{{ url('',['admin', 'Kerja']) }}" class="btn btn-default" aria-label="Left Align">Kerja Apa?</a></h4>
            <h4><a href="{{ url('',['admin', 'Nikah']) }}" class="btn btn-default" aria-label="Left Align">Kapan Nikah?</a></h4>
        </div>    
    </section>
@stop
