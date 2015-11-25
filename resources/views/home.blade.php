@extends ('master')
<header>
    @include('partials.header')
</header>

@section('content')
    <div id="content">
    <h1>Welcome to the home page!</h1>
        <hr></hr>
        <br>
    <div id="rightcolumn" style="text-align: right; width: 200px; margin-left: auto; margin-right: 10px; margin-bottom: -160px;">
        <h4><b>Registered Users:</b></h4> {{ $users }}
        <br>
        <h4><b>Newest Users:</b></h4>
        @foreach ($latestUsers as $latestUser)
            <li>
                {{ $latestUser->username }}
            </li>
    @endforeach
    </div>
        <div id="centrecolumn" style="text-align: center; width: 500px; margin-left: auto; margin-right: auto;">
            <h4><b>Latest Articles:</b></h4>
            @foreach($articles as $article)
                <h2>{{ $article->title }}</h2>

                <p>{{ $article->body }}</p>

            @endforeach
        </div>






    </div>


@stop
<?php
//This Page is the home page, it is very bare at the moment but we are using that include to make sure the
        //nav bar is on the page and we are using the extend to get all the detailing from the master page aswell
        //we are using the section to specify where our content section is.
?>