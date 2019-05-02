@extends('layouts.bug')

@section('content')

    <div class="container">
        <h1 id="under-navbar">All Dongles</h1>
        <br>
        <br>
        
        <div class="row" style="margin-left: 7%">
            @foreach ($user->dongles as $dongle)
            <div class="col s12 m4 l2 offset-s1">
                <div class="card" style="max-width: 230px;border: 2px solid #00cc99;">
                    <div class="card-image waves-effect waves-block waves-light">
                    <img src="{{ $dongle->logo }}" style="object-fit: cover;width: 230px;height: 230px;">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4" style="font-size: 18px;">{{$dongle->name}}<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4" style="font-size: 18px;">{{$dongle->name}}<i class="material-icons right">close</i></span>
                        <p>{{$dongle->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
@endsection