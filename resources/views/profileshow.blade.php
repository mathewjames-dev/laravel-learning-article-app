@extends ('master')
<header class="col-md-4">
    @include('header')
</header>
@section('content')
    <h1>{{$user->username}}'s Profile!</h1>
    <hr></hr>
    <br>


    User ID:{{$user->id}}<br>
    Username: {{$user->username}}<br>
    Email: {{$user->email}}<br>
@stop