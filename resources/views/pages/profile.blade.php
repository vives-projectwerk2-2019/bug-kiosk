@extends('layouts.bug')

@section('content')

<div class="row">
    <h1>Profile</h1>
    <div id="generator">
        <generator uid={{Auth::user()->user_dongle_id}} name={{str_replace(' ','',Auth::user()->name)}} img="{{ Auth::user()->avatar }}"></generator>
    </div>
    <div>
        <p id="profile-name">Name: {{ Auth::user()->name }}</p>
        <p id="profile-email">E-mail: {{ Auth::user()->email }}</p>
        <p id="user_dongle_id">User dongle id: {{ Auth::user()->user_dongle_id }}</p>
        <br>
        <a href="edit_profile" class="waves-effect waves-light btn-large" id="profile-button"><i class="material-icons right">build</i>Edit</a>
    </div>
</div>
@endsection