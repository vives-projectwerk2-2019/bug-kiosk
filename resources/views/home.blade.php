@extends('layouts.app')

@include('inc.navbar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    
                </div>
            </div>

            <br>

            <p>
                Welcome to the kiosk for BUG: Bug Universal Gamecontroller!
                BUG is a portable gamecontroller with the focus on low power. 
                Which means that the focus is on a controller with a long batterie life-time. 
            </p>
            <p>
                Together with the controller, you can add 4 dongles. 
                with 3 of them are add-ons where you can modify your playstyle. 
                Thanks to the kiosk, you can choose the function of each add-on for the playstyle you wanna play.
            </p>
            <p>
                To chose the Functions for the dongles:
                <ul>
                    <li> First, go to the menu right above. </li>
                    <li> Then, chose 'Program Dongles'. </li>
                </ul>
            </p>
            <p>
                You will come to a menu, where you have the option to chose the functions for each dongle.
                Chose with what you wanna play and press on the button below.
            </p>
            <p>
                If you want a view of what for types we have, 
                go to Dongles and you will see all the type of add-ons/dongles you can use to utilize your playstyle.
            </p>
        </div>
    </div>
</div>
@endsection
