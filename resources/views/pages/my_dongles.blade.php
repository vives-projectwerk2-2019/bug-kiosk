@extends('layouts.app')

@include('inc.navbar')

@section('content')

<div>
<br>
<h1 id="under-navbar">My Dongles</h1>
<br>
<br>

<div id="left-logo-div">
    <?php $user = App\User::find(Auth::user()->id); ?>
    @foreach ($user->dongles as $dongle)
    <img src="{{ $dongle->logo }}" id="logo-list" class="tooltipped dongle-icon" data-position="top" data-tooltip="{{$dongle->name}}<br><br>{{$dongle->description}}">
    @endforeach
    <p id="stop-float">
</div>
@endsection