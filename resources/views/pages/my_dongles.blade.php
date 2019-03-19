@extends('layouts.app')

@include('inc.navbar')

@section('content')
<div>
<h1 id="under-navbar">All Dongles</h1>
<div class="row ">
                <div class="dongle-white"></div>
                <div class="dongle col s1 tooltipped" data-position="top" data-tooltip="Test test test test test">Dongle 1
                </div>
                <div class="dongle-white"></div>
                <div class="dongle col s1 tooltipped" data-position="top" data-tooltip="Test test test test test">Dongle 2
                </div>
                <div class="dongle-white"></div>
                <div class="dongle col s1 tooltipped" data-position="top" data-tooltip="Test test test test test">Dongle 3
                </div>
                <div class="dongle-white"></div>
            </div>
            <br>
@endsection