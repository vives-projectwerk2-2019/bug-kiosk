@extends('layouts.app')

@include('inc.navbar')

@section('content')

<?php

$name = Auth::user()->name;
$email = Auth::user()->email;

?>

<div>
    <h1 id="under-navbar">Profile</h1>
    <div id="avatar">
        <p id="avatar-text">Avatar</p>
        <p id="profile-name">Name: <?php echo $name;?></p>
        <p id="profile-email">E-mail: <?php echo $email;?></p>
        <a  href="" class="waves-effect waves-light btn-large" id="profile-button">Edit</a>
    </div>

</div>
@endsection