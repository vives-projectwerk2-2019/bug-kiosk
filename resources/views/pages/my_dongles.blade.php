@extends('layouts.app')

@include('inc.navbar')

@section('content')
<div>
    <h1 id="under-navbar">My Dongles</h1>
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
</div>
@endsection