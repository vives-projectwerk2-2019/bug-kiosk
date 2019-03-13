@extends('layouts.app')

@include('inc.navbar')

@section('content')
<div>
    <h1 id="under-navbar">Profile</h1>
    <div id="avatar">
        <p id="avatar-text">Avatar</p>
        <p id="profile-name">Name</p>
        <p id="profile-email">E-mail:</p>
        <a  href="" class="waves-effect waves-light btn-large" id="profile-button">Edit</a>
    </div>

</div>
@endsection