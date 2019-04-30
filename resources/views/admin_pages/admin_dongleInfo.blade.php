@extends('layouts.bug')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <br>
        <h1 id="under-navbar">DongleInfo</h1>
    </div>

    <a href ="/admin/index" class="waves-effect waves-light btn-large"><i class="material-icons left">arrow_back</i>Return to admin index</a>

    <br>
    <br>

    
        @foreach ($dongles as $dongle)
        <div style="border: 2px solid #00cc99;">
            <br>
            <p style="font-weight: bold; color: black;">ID: {{ $dongle->id }}</p>
            <p>Name: {{ $dongle->name }}</p>
            <p>Description: {{ $dongle->description }}</p>
            <p>Logo: {{ $dongle->logo }}</p>
            <p>Dongle hash: {{ $dongle->dongle_hash }}</p>
        <div class="row justify-content-center">

        <a style="margin-right: 1%;" href ="/admin/dongleInfo/edit/{{ $dongle->id }}" class="waves-effect waves-light btn-large"><i class="material-icons right">build</i>Edit</a>
        <a href ="/admin/userDongle/{{ $dongle->id }}" class="waves-effect waves-light btn-large"><i class="material-icons right">delete</i>Delete</a>

        </div>
    </div>
        <br>
        @endforeach
</div>

@endsection