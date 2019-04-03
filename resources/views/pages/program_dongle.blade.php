@extends('layouts.app')

@include('inc.navbar')

@section('content')
<div id="dongles">
    <dongles uid={{Auth::user()->id}}></dongles>
</div>

@endsection