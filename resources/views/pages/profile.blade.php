@extends('layouts.bug')

@section('content')

<div>
    <h1 id="under-navbar" style="margin:0;">Profile</h1>
    <div class="avatar">
        <img src="{{ Auth::user()->avatar }}" alt="User icon" id="profile_picture">
    </div>
    <div>
        <p id="profile-name">Name: {{ Auth::user()->name }}</p>
        <p id="profile-email">E-mail: {{ Auth::user()->email }}</p>
        <p id="user_dongle_id">User dongle id: {{ Auth::user()->user_dongle_id }}</p>
        <div id="generator">
            <generator uid={{Auth::user()->user_dongle_id}} name={{Auth::user()->name}}></generator>
        </div>
        <a  href="edit_profile" class="waves-effect waves-light btn-large" id="profile-button" style="margin: 0;"><i class="material-icons right">build</i>Edit</a>
    </div>
</div>
@endsection