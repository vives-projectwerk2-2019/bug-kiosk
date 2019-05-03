@extends('layouts.bug')

@section('content')
<div class="container">

    <h1>Permission denied!</h1>

    <br>
    <br>

    <div class="row">
        <p class="col s6 offset-s3" style="border: 2px solid red"><br>You do not have permission to view the admin page! <br> If you think this is a mistake please contact an administrator.<br>...</p>
    </div>
        
    <br>
    <br>
    <br>
    <a href="home" class="waves-effect waves-light btn-large">Return to home</a>
</div>
@endsection