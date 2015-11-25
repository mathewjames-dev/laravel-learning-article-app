@extends('master')

@if (Auth::check())
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">RandomName</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/profile">Profile</a></li>
                    <li><a href="/auth/logout">Logout</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Articles
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/articles">All Articles</a></li>
                            <li><a href="/articles/create">Create Article!</a></li>
                        </ul></li>
                </ul>
            </div>
        </div>
    </nav>
@else
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">RandomName</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/auth/login">Login</a></li>
                    <li><a href="/auth/register">Register</a></li>
                    <li><a href="/articles">Articles</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endif
<div id="content">
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