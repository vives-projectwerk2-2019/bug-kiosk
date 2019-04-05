@extends('layouts.app')

@include('inc.navbar')

@section('content')
<div>
    <h1 id="under-navbar">All Dongles</h1>
    <div class="row ">
        <div class="dongle-white"></div>
        <div class="col s1">
           <img class="tooltipped dongle-icon" data-position="top" data-tooltip="<a>Name: Adamantium</a><br><br><a>Description: </a>" src="{{ asset('logo/adamantium.png') }}" alt="Adamantium icon" class="dongle-icon">
        </div>
        <div class="dongle-white"></div>
        <div class="col s1">
            <img class="tooltipped dongle-icon" data-position="top" data-tooltip="<a>Name: Amphibious</a><br><br><a>Description:  </a>" src="{{ asset('logo/amphibious.png') }}" alt="Amphibious icon" class="dongle-icon">
         </div>
        <div class="dongle-white"></div>
        <div class="col s1">
            <img class="tooltipped dongle-icon" data-position="top" data-tooltip="<a>Name: EmpBomb</a><br><br><a>Description:  </a>" src="{{ asset('logo/empBomb.png') }}" alt="EmpBomb icon" class="dongle-icon">
         </div>
        <div class="dongle-white"></div>
    </div>
    <br>
    <div class="row">
        <div class="dongle-white"></div>
        <div class="col s1">
            <img class="tooltipped dongle-icon" data-position="top" data-tooltip="<a>Name: Flammenwerpfer</a><br><br><a>Description:  </a>" src="{{ asset('logo/flammenwerpfer.png') }}" alt="Flammenwerpfer icon" class="dongle-icon">
         </div>
        <div class="dongle-white"></div>
        <div class="col s1">
            <img class="tooltipped dongle-icon" data-position="top" data-tooltip="<a>Name: GravyShield</a><br><br><a>Description:  </a>" src="{{ asset('logo/gravyShield.png') }}" alt="GravyShield icon" class="dongle-icon">
         </div>
        <div class="dongle-white"></div>
        <div class="col s1">
            <img class="tooltipped dongle-icon" data-position="top" data-tooltip="<a>Name: Harrier</a><br><br><a>Description:  </a>" src="{{ asset('logo/harrier.png') }}" alt="Harrier icon" class="dongle-icon">
         </div>
        <div class="dongle-white"></div>
    </div>
    <br>
    <div class="row ">
        <div class="dongle-white"></div>
        <div class="col s1">
           <img class="tooltipped dongle-icon" data-position="top" data-tooltip="<a>Name: Laser</a><br><br><a>Description:  </a>" src="{{ asset('logo/laser.png') }}" alt="Laser icon" class="dongle-icon">
        </div>
        <div class="dongle-white"></div>
        <div class="col s1">
            <img class="tooltipped dongle-icon" data-position="top" data-tooltip="<a>Name: Mines</a><br><br><a>Description:  </a>" src="{{ asset('logo/mines.png') }}" alt="Mines icon" class="dongle-icon">
         </div>
        <div class="dongle-white"></div>
        <div class="col s1">
            <img class="tooltipped dongle-icon" data-position="top" data-tooltip="<a>Name: Nanobots</a><br><br><a>Description:  </a>" src="{{ asset('logo/nanobots.png') }}" alt="Nanobots icon" class="dongle-icon">
         </div>
        <div class="dongle-white"></div>
    </div>
    <br>
    <div class="row ">
            <div class="dongle-white"></div>
            <div class="col s1">
               <img class="tooltipped dongle-icon" data-position="top" data-tooltip="<a>Name: Plasmagun</a><br><br><a>Description:  </a>" src="{{ asset('logo/plasmagun.png') }}" alt="Plasmagun icon" class="dongle-icon">
            </div>
            <div class="dongle-white"></div>
            <div class="col s1">
                <img class="tooltipped dongle-icon" data-position="top" data-tooltip="<a>Name: Ram</a><br><br><a>Description:  </a>" src="{{ asset('logo/ram.png') }}" alt="Ram icon" class="dongle-icon">
             </div>
            <div class="dongle-white"></div>
            <div class="col s1">
                <img class="tooltipped dongle-icon" data-position="top" data-tooltip="<a>Name: RocketEngine</a><br><br><a>Description:  </a>" src="{{ asset('logo/rocketEngine.png') }}" alt="RocketEngine icon" class="dongle-icon">
             </div>
            <div class="dongle-white"></div>
        </div>
    <br>
    <div class="row ">
            <div class="dongle-white"></div>
            <div class="col s1">
               <img class="tooltipped dongle-icon" data-position="top" data-tooltip="<a>Name: StructuralStrengthening</a><br><br><a>Description:  </a>" src="{{ asset('logo/structuralStrengthening.png') }}" alt="StructuralStrengthening icon" class="dongle-icon" width="165%" height="165%">
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