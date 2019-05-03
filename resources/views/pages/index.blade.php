@extends('layouts.app')

@section('content')
<style>
a {
    margin-bottom: 5%;
}
</style>
<div class="index">
    <h1>Bug kiosk</h1>
   <a  href="/register" class="waves-effect waves-light btn-large"><i class="material-icons right">person_add</i>Register</a>
    <a  href="/login" class="waves-effect waves-light btn-large"><i class="material-icons right">lock_open</i>Login</a>

    <br>
    <br>
    <br>
    <h4>Or continue with:</h4>
    <br>
    <a href="/login/facebook" class="waves-effect waves-light btn-large">Facebook</a>
    <a href="/login/github" class="waves-effect waves-light btn-large">Github</a>
    <a href="/login/google" class="waves-effect waves-light btn-large">Google</a>
    <a href="/login/twitter" class="waves-effect waves-light btn-large">Twitter</a>
</div>
@endsection