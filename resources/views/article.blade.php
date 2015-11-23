@extends('master')

@if (Auth::check())
<header class="col-md-4">
    <div class="col-md-4">
        <ul class="nav">
            <li><a href="/">Home</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/auth/logout">Logout</a></li>
            <li><a href="/articles/create">Create Article</a></li>
        </ul>
    </div>
</header>
@else
    <header class="col-md-4">
        <div class="col-md-4">
            <ul class="nav">
                <li><a href="/">Home</a></li>
                <li><a href="/auth/login">Login</a></li>
                <li><a href="/auth/register">Register</a></li>
                <li><a href="/articles">Articles</a></li>
            </ul>
        </div>
    </header>
@endif
<div id="content" class="col-md-8">
@section('content')
    <h1>Articles</h1>

    <hr></hr>
    <?php
        //Below is a foreach statement that will put articles into article. Then for each article it will run
            //the show function inside the controller we specified. Then it will get the article and output the
            //id of the article, as well as the title. In the div class body it will then output the article
            //body. then it will end the foreach. It will do this for every article
    ?>
    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{ action('articleController@show', [$article->id]) }}">{{ $article->title }}</a>
            </h2>

            <div class="body">{{ $article->body }}</div>
        </article>
    @endforeach
</div>

<br><br><br><br>

@stop