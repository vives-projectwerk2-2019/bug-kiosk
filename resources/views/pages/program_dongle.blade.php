@extends('layouts.app')

@include('inc.navbar')

@section('content')

<div id="dongles">
    <dongles uid={{Auth::user()->user_dongle_id}} admin={{Auth::User()->roles->pluck('name')->first()}} ></dongles>
</div>

@endsection