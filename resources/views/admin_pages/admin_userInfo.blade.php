@extends('layouts.bug')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <br>
        <h1 id="under-navbar">UserInfo</h1>
    </div>

    @if(session()->has('error'))
        <p style="font-weight: bold; color: red;">{{ session()->get('error') }}</p>

    @endif
    
        @foreach ($users as $user)
        <div style="border: 2px solid #00cc99;">
            <br>
            <p style="font-weight: bold; color: black;">ID: {{ $user->id }}</p>
            <p>Name: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>User_dongle_id: {{ $user->user_dongle_id }}</p>
            <p>Api_token: {{ $user->api_token }}</p>
            <p>Device_id: {{ $user->device_id }}</p>
            <p>Avatar: {{ $user->avatar }}</p>
        <div class="row justify-content-center">

        <a href ="/admin/userInfo/{{ $user->id }}" class="waves-effect waves-light btn-large"><i class="material-icons right">delete</i>Delete</a>

        </div>
    </div>
        <br>
        @endforeach
</div>

@endsection