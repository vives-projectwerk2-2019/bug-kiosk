@extends('layouts.app')

@include('inc.navbar')

@section('content')

    <div class="container">
        <h1 id="under-navbar">All Dongles</h1>
        <?php $dongles = App\Dongle::All(); ?>
        
        <div class="row">
            @foreach ($dongles as $dongle)
            <div class="col s6 m4 l3">
                <div class="card" id="dongle_card">
                    <div class="card-image waves-effect waves-block waves-light">
                    <img src="{{ $dongle->logo }}" id="dongles_img">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4" id="dongle_content">{{$dongle->name}}<i class="material-icons right">more_vert</i></span>
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
@endsection