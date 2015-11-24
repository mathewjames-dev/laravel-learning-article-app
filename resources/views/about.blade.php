@extends ('master')

@section ('content')
    <header id="header" class="col-md-4">
        @include('partials.header')
    </header>
    <div id="content" class="col-md-8">
    <h1>About Me!</h1>

    <hr></hr>

    @if(count($favcities))
    <h3>Favourite Cities:</h3>
    <ul>
        <?php
        //The if statements in this document basically count the database that I have named in a different
            //file and if there are entries into that database it will then carry on with the rest of the code
            //the rest of the code is a foreach which will put the variable into another variable.
            //the new variable which will contain each city or team for example will then be produced
            //into a list which is where we get the ->city part. We get the city from the title of one
            //of the columns in the database.
        ?>
        @foreach($favcities as $cities)
        <li>
                <b>{{ $cities->city }}</b>
        </li>
        @endforeach
    </ul>
    @endif

    @if(count($favteams))
    <h3>Favourite Teams:</h3>
    <ul>
        @foreach($favteams as $teams)
            <li>
                <b>{{ $teams->team }}</b>
            </li>
        @endforeach
    </ul>
    @endif
    </div>
@section ('footer')

@stop
