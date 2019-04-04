@extends('layouts.app')

@include('inc.navbar')

@section('content')
<?php 
$random = strval(bin2hex(openssl_random_pseudo_bytes(7)));
$result = "00" . $random;
?>

<div id="dongles">
    <dongles uid={{Auth::user()->id}}></dongles>
</div>

@endsection