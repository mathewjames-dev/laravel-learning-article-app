@extends ('master')
<header class="col-md-4">
    @include('header')
</header>
@section('content')
    <h1>{{$username}}'s Profile!</h1>
    <hr></hr>
    <br>


    User ID:{{$user_id}}<br>
    Username:{{$username}}<br>
    Email:{{$email}}<br>
    Articles: {{ $artcount }}  <a href="/profilearticles" class="btn btn-info" role="button">View Articles!</a>
    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['profileController@update', $user_id]]) !!}
    <div class="form-group">
        {!! Form::label('username', 'Username:') !!}
        {!! Form::text('username', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Update Profile', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@stop