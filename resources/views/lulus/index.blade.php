@extends('master', ['title' => "Kapan Lulus?", 'url' => "http://localhost/goblog/public/kapanlulus"])

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
        <h2><b>Kapan Lulus?</b></h2>
        <h3>{{ $answers->answer }}</h3>
        <br/>
        <a class="btn-lg btn-info" href="{{ url('',['kapanlulus']) }}"><b>Nanya lagi?</b></a>
        <br/>
        <br/>
        <br/>
        <div class="fb-share-button" data-href="http://localhost/goblog/public/kapanlulus" data-layout="button_count" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fgoblog%2Fpublic%2Fkapanlulus&amp;src=sdkpreparse">Share</a></div>
        <a href="https://twitter.com/share" class="twitter-share-button" data-text="{{ $answers->answer }}" data-url="http://localhost/goblog/public/kapannikah" data-hashtags="kapannikah" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

    </div>

@stop
