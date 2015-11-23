@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error  }}</li>
        @endforeach
    </ul>
@endif

<?php
//This is just a view that I included on any form creation pages so that if anything displays errors
        //it will display them. This way makes it easier than writing out this code repeatedly.
?>