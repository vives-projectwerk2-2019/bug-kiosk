@extends('layouts.app')

@include('inc.navbar')

@section('content')
<div>
<h1 id="under-navbar">My Dongles</h1>
<div class="row ">
    <div class="dongle-white"></div>
    <div class="col s1">
       <img class="tooltipped dongle-icon" data-position="top" data-tooltip="Adamantium<br><br>Tank armor: +6<br>Tank movement: -1" src="{{ asset('logo/adamantium.png') }}" alt="Adamantium icon">
    </div>
    <div class="dongle-white"></div>
    <div class="col s1">
        <img class="tooltipped dongle-icon" data-position="top" data-tooltip="Amphibious<br><br>Tank can enter water" src="{{ asset('logo/amphibious.png') }}" alt="Amphibious icon">
     </div>
    <div class="dongle-white"></div>
    <div class="col s1">
        <img class="tooltipped dongle-icon" data-position="top" data-tooltip="EmpBomb<br><br>Weapon: EMP-Bomb" src="{{ asset('logo/empBomb.png') }}" alt="EmpBomb icon">
     </div>
    <div class="dongle-white"></div>
</div>
<br>
@endsection