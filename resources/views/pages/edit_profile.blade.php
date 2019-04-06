@extends('layouts.app')

@include('inc.navbar')

@section('content')

<h1 id="under-navbar">Profile</h1>
    <div class="avatar">
        <img src="{{ Auth::user()->avatar }}" alt="User icon" id="profile_picture">
        <form enctype="multipart/form-data" action="/edit_profile" method="POST">
            <label>Update profile picture.</label>
            <input type="file" name="avatar" id="file_input">
            @csrf
            <input type="submit" class="pull-right btn btn-sm btn-primary" value="change">
        </form>
    </div>
    <div>
        <p id="profile-name">Name: {{ Auth::user()->name }}</p>
        <p id="profile-email">E-mail: {{ Auth::user()->email }}</p>
    </div>
</div>

@endsection