@extends('layouts.app')

@include('inc.navbar')

@section('content')

    <div class="container">
        <h1 id="under-navbar">All Dongles</h1>
        <div id="left-logo-div">
        <?php $dongles = App\Dongle::All(); ?>

        <div class="row">
            @foreach ($dongles as $dongle)
            <div class="col s6 m4 l3">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                    <img src="{{ $dongle->logo }}"  style="object-fit: cover; width:230px; height:230px;">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">{{$dongle->name}}<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">{{$dongle->name}}<i class="material-icons right">close</i></span>
                        <p>{{$dongle->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
@endsection