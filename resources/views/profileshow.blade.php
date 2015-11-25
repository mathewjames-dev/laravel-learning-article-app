@extends ('master')
<header>
    @include('partials.header')
</header>
@section('content')
    <div id="content">
    <h1>{{$user->username}}'s Profile!</h1>
    <hr></hr>
    <br>


    User ID:{{$user->id}}<br>
    Username: {{$user->username}}<br>
    Email: {{$user->email}}<br>
    Articles:

    @foreach($articles as $article)
        <h2>{{ $article->title }}</h2>

        <p>{{ $article->body }}</p>

    @endforeach
    </div>

@stop