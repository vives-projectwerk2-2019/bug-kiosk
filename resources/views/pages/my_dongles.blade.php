@extends('layouts.app')

@include('inc.navbar')

@section('content')
<div id="dongles">
    <dongles uid={{Auth::user()->id}}></dongles>
</div>
<div>
<h1 id="under-navbar">All Dongles</h1>
    <div class="row ">
        <div class="dongle-white"></div>
        <div class="col s1 tooltipped" data-position="top" data-tooltip="<a>Name: Life</a><br><br><a>Discription: Adds extra life</a>">
        <img src="{{ asset('logo/life.png') }}" alt="Life icon" class="dongle-icon">
        </div>
        <div class="dongle-white"></div>
        <div class="col s1 tooltipped" data-position="top" data-tooltip="<a>Name: Shield</a><br><br><a>Discription: Adds extra shield</a>">
            <img src="{{ asset('logo/shield.png') }}" alt="Shield icon" class="dongle-icon">
        </div>
        <div class="dongle-white"></div>
        <div class="col s1 tooltipped" data-position="top" data-tooltip="<a>Name: Life</a><br><br><a>Discription: Adds extra life</a>">
            <img src="{{ asset('logo/life.png') }}" alt="Life icon" class="dongle-icon">
        </div>
        <div class="dongle-white"></div>
    </div>
<br>
@endsection