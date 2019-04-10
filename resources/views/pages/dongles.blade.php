@extends('layouts.app')

@include('inc.navbar')

@section('content')

    <h1 id="under-navbar">All Dongles</h1>
    <div id="left-logo-div">
    <?php $dongles = App\Dongle::All(); ?>
    @foreach ($dongles as $dongle)
    <img src="{{ $dongle->logo }}" id="logo-list" class="tooltipped dongle-icon" data-position="top" data-tooltip="{{$dongle->name}}<br><br>{{$dongle->description}}">
    @endforeach
    <p id="stop-float">
    </div>
@endsection