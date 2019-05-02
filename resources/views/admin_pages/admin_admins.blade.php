@extends('layouts.bug')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <br>
        <h1>All admins</h1>
    </div>

    <a href ="/admin/index" class="waves-effect waves-light btn-large"><i class="material-icons left">arrow_back</i>Return to admin index</a>

    <br>
    <br>

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
        <p>Roles:
            @foreach ($user->roles as $role)
               [ {{ $role->name }} ]
            @endforeach
        </p>
        <p>Active dongles:
                @foreach ($user->dongles as $dongle)
                   [ {{ $dongle->name }} ]
                @endforeach
            </p>
    <div class="row justify-content-center">

    <a href ="/admin/admins/{{ $user->id }}" class="waves-effect waves-light btn-large"><i class="material-icons right">settings_power</i>Remove admin rights</a>

    </div>
</div>
    <br>
    @endforeach
</div>

@endsection