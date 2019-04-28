@extends('layouts.bug')

@section('content')

<div>
    <h1 id="under-navbar">Profile</h1>
    <div class="avatar">
        <img src="{{ Auth::user()->avatar }}" alt="User icon" id="profile_picture">
    </div>
    <div>
        <p id="profile-name">Name: {{ Auth::user()->name }}</p>
        <p id="profile-email">E-mail: {{ Auth::user()->email }}</p>
        <a  href="edit_profile" class="waves-effect waves-light btn-large" id="profile-button">Edit</a>
    </div>
</div>
@endsection