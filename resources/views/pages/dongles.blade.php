@extends('layouts.app')

@include('inc.navbar')

@section('content')
<div>
    <h1 id="under-navbar">All Dongles</h1>
    <div class="row">
        <div id="dongle">Dongle 1
                <p>Name</p>
                <p>Info</p>
        </div>
        <div id="dongle">Dongle 2
                <p>Name</p>
                <p>Info</p>
        </div>
        <div id="dongle">Dongle 3
                <p>Name</p>
                <p>Info</p>
        </div>
    </div>
    <div class="row">
        <div id="dongle">Dongle 4
                <p>Name</p>
                <p>Info</p>
        </div>
        <div id="dongle">Dongle 5
                <p>Name</p>
                <p>Info</p>
        </div>
        <div id="dongle">Dongle 6
                <p>Name</p>
                <p>Info</p>
        </div>
    </div>
</div>
@endsection