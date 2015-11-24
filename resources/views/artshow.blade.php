@extends('master')
<header class="col-md-4">
    @include('partials.header')
</header>
@section('content')

    <h1>{{ $article->title  }}</h1>
    <h3>Written By: {{ $article->user->username }}</h3>


    <?php
            //This page is simple it will get the article variable and out put the title and it will also out
            //put the body. the $article is the exact name of the column in the database as well

            //below all of this I have added 2 submit buttons which will go to the functions in the controller
            //and run the functions.
    ?>
    <hr></hr>

        <article>
            <div class="body">{{ $article->body }}</div>
            @unless ($article->tags->isEmpty())
            <div class="col-md-8"><h5>Tags:</h5>
                <ul>
                    @foreach ($article->tags as $tag)
                        <li>
                            {{ $tag->name }}
                        </li>
                    @endforeach
                </ul>
            @endunless
            </div>
        </article>

    {!! Form::model($article, ['method' => 'GET', 'action' => ['articleController@edit', $article->id]]) !!}
    {!! Form::submit('Edit Article', ['class' => 'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
    {!! Form::model($article, ['method' => 'DELETE', 'action' => ['articleController@destroy', $article->id]]) !!}
    {!! Form::submit('Delete Article', ['class' => 'btn btn-primary form-control']) !!}
    {!! Form::close() !!}

@stop