@extends('layouts.app')

@include('inc.navbar')

@section('content')

<div class="container">
    <br>
    <h1 id="under-navbar">My Dongles</h1>
    <br>
    <br>

    <?php $user = App\User::find(Auth::user()->id); ?>
    <div class="row">
        @foreach ($user->dongles as $dongle)
        <div class="col s6 offset-s1" id="center_my_dongles">
            <div class="card" id="my_dongle_card">
                <div class="card-image waves-effect waves-block waves-light">
                <img src="{{ $dongle->logo }}" id="my_dongle_img">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4" id="dongle_content"">{{$dongle->name}}<i class="material-icons right">more_vert</i></span>
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