@extends('master')
<header class="col-md-4">
    @include('partials.header')
</header>
@section('content')

    <div id="content" class="col-md-8">
    <h1>Write a new Article</h1>
    <hr/>
    {!! Form::open(['url' => 'articles']) !!}
        @include ('partials.form', ['submitButton' => 'Add Article'])
   {!! Form::close() !!}
        <?php
        // Below is a basic if statement that will catch any errors that arise from the creation and will
            //Put them in a list on the page.
        ?>

   </div>

@stop