@extends ('master')
<header class="col-md-4">
    @include('partials.header')
</header>
@section('content')
    <div id="content" class="col-md-8">
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