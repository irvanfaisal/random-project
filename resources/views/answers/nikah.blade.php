@extends('master', ['title' => "Kapan Nikah?", 'url' => "http://localhost/goblog/public/kapannikah"])

@section('content')
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <div class="container">
        <h2><b>Kapan Nikah?</b></h2>
        <h3>{{ $answers->answer }}</h3>
        <br/>
        <a class="btn btn-info" href="{{ url('',['kapannikah']) }}">Nanya lagi?</a>
        <br/>
        <br/>
        <div class="fb-share-button" data-href="http://localhost/goblog/public/kapanlulus" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fgoblog%2Fpublic%2Fkapanlulus&amp;src=sdkpreparse">Share</a></div>

    </div>

@stop
