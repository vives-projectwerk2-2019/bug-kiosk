@extends('layouts.bug')

@section('content')

<div class="container">
    <br>
    <h1 id="under-navbar">My Dongles</h1>
    <br>
    <br>

        @if (sizeof($user->dongles) > 0)
        <div class="row">
            @foreach ($user->dongles as $dongle)
            <div class="col s6 offset-s1" style="max-width: 22.5%;">
                <div class="card" style="border: 2px solid #00cc99;">
                    <div class="card-image waves-effect waves-block waves-light">
                    <img src="{{ $dongle->logo }}" style="object-fit: cover;height: 30%;">
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
        @else
        <p>You have no active dongles.</p>
        @endif
    </div>
</div>
@endsection