@extends('layouts.bug')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <br>
    <h1>Edit dongle with id: {{ $dongle->id }}</h1>
    </div>

    <p style="color: red; font-weight: bold;">Editing dongles is not supported in this version.</p>
    <br>

    <a href ="/admin/dongleInfo" class="waves-effect waves-light btn-large"><i class="material-icons left">arrow_back</i>Return to dongles overview</a>

    <br>
    <br>



</div>

@endsection