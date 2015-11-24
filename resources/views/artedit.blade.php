@extends('master')
<header class="col-md-4">
    @include('partials.header')
</header>
@section('content')
    <h1>Edit {!! $article->title !!}</h1>

    <hr/>
    <br><br><br><br><br>
    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['articleController@update', $article->id]]) !!}
    <?php
    //The above is a patch method which will patch something obviously. The action we want it to do though
            //is the update method which would lie in our article controller page since we are updating an article
            // we have to wrap the ending in an array as we have a wildcard on our routes and we need to let laravel that
            // so then we tell laravel we want to use the update function on the article and we tell laravel what
            //article we want to update

            //We also have to bind an eloquent model to the form as we want the edit article form to show the
            //article you are editing. So we change open to model and then we give it our object.
    ?>

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('published_at', 'Publish On:') !!}
        {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tag_list', 'Tags:') !!}
        {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'multiple']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Edit Article', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    <?php
    // Below is a basic if statement that will catch any errors that arise from the creation and will
    //Put them in a list on the page.
    ?>

@stop