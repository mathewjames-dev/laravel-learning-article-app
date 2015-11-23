@extends ('master')
<header class="col-md-4">
    @include('header')
</header>
@section('content')
    <div id="content" class="col-md-8">
    <h1>{{$username}}'s Articles!</h1>
    <hr></hr>
    <br>

    User ID:{{$user_id}}<br>
    Username:{{$username}}<br>
    Email:{{$email}}<br>
    Articles:

    @foreach($articles as $article)
        <h2>{{ $article->title }}</h2>

        <p>{{ $article->body }}</p>

    @endforeach
    </div>

@stop