@extends('layouts.app')

@include('inc.navbar')

@section('content')
<div>
    <h1 id="under-navbar">All Dongles</h1>
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
    <div class="row">
        <div class="dongle-white"></div>
        <div class="col s1">
            <img class="tooltipped dongle-icon" data-position="top" data-tooltip="Flammenwerpfer<br><br>Weapon: Flammenwerpfer" src="{{ asset('logo/flammenwerpfer.png') }}" alt="Flammenwerpfer icon">
         </div>
        <div class="dongle-white"></div>
        <div class="col s1">
            <img class="tooltipped dongle-icon" data-position="top" data-tooltip="GravyShield<br><br>Tank armor: +1" src="{{ asset('logo/gravyShield.png') }}" alt="GravyShield icon">
         </div>
        <div class="dongle-white"></div>
        <div class="col s1">
            <img class="tooltipped dongle-icon" data-position="top" data-tooltip="Harrier<br><br>Tank movement: +6" src="{{ asset('logo/harrier.png') }}" alt="Harrier icon">
         </div>
        <div class="dongle-white"></div>
    </div>
    <br>
    <div class="row ">
        <div class="dongle-white"></div>
        <div class="col s1">
           <img class="tooltipped dongle-icon" data-position="top" data-tooltip="Laser<br><br>Weapon: Lasergun" src="{{ asset('logo/laser.png') }}" alt="Laser icon">
        </div>
        <div class="dongle-white"></div>
        <div class="col s1">
            <img class="tooltipped dongle-icon" data-position="top" data-tooltip="Mines<br><br>Weapon: Mines" src="{{ asset('logo/mines.png') }}" alt="Mines icon">
         </div>
        <div class="dongle-white"></div>
        <div class="col s1">
            <img class="tooltipped dongle-icon" data-position="top" data-tooltip="Nanobots<br><br>Tank health: +2" src="{{ asset('logo/nanobots.png') }}" alt="Nanobots icon">
         </div>
        <div class="dongle-white"></div>
    </div>
    <br>
    <div class="row ">
            <div class="dongle-white"></div>
            <div class="col s1">
               <img class="tooltipped dongle-icon" data-position="top" data-tooltip="Plasmagun<br><br>Weapon: Plasmagun" src="{{ asset('logo/plasmagun.png') }}" alt="Plasmagun icon" >
            </div>
            <div class="dongle-white"></div>
            <div class="col s1">
                <img class="tooltipped dongle-icon" data-position="top" data-tooltip="Ram<br><br>Weapon: Ram" src="{{ asset('logo/ram.png') }}" alt="Ram icon">
             </div>
            <div class="dongle-white"></div>
            <div class="col s1">
                <img class="tooltipped dongle-icon" data-position="top" data-tooltip="RocketEngine<br><br>Tank movement: +3" src="{{ asset('logo/rocketEngine.png') }}" alt="RocketEngine icon">
             </div>
            <div class="dongle-white"></div>
        </div>
    <br>
    <div class="row ">
            <div class="dongle-white"></div>
            <div class="col s1">
               <img class="tooltipped dongle-icon" data-position="top" data-tooltip="StructuralStrengthening<br><br>Tank health: +5" src="{{ asset('logo/structuralStrengthening.png') }}" alt="StructuralStrengthening icon">
            </div>
            <div class="dongle-white"></div>
            <div class="col s1">
                <div class="dongle-icon"></div> 
             </div>
            <div class="dongle-white"></div>
            <div class="col s1">
                <div class="dongle-icon"></div> 
            </div>
            <div class="dongle-white"></div>
        </div>
</div>
@endsection