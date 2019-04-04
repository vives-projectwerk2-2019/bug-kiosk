@extends('layouts.app')

@include('inc.navbar')

@section('content')
<div>
<h1 id="under-navbar">My Dongles</h1>
    <div class="row ">
        <div class="dongle-white"></div>
        <div class="col s1">
        <img class="tooltipped" data-position="top" data-tooltip="<a>Name: Life</a><br><br><a>Discription: Adds extra life</a>" src="{{ asset('logo/life.png') }}" alt="Life icon" class="dongle-icon">
        </div>
        <div class="dongle-white"></div>
        <div class="col s1">
            <img class="tooltipped" data-position="top" data-tooltip="<a>Name: Life</a><br><br><a>Discription: Adds extra life</a>" src="{{ asset('logo/shield.png') }}" alt="Shield icon" class="dongle-icon">
        </div>
        <div class="dongle-white"></div>
        <div class="col s1">
            <img class="tooltipped" data-position="top" data-tooltip="<a>Name: Life</a><br><br><a>Discription: Adds extra life</a>" src="{{ asset('logo/life.png') }}" alt="Life icon" class="dongle-icon">
        </div>
        <div class="dongle-white"></div>
    </div>
<br>
@endsection