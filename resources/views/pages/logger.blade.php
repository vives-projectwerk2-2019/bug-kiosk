@extends('layouts.app')

@include('inc.navbar')

@section('content')
<div id="app">
    <app></app>
</div>
<script src="{{ mix('js/bootstrap.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
@endsection