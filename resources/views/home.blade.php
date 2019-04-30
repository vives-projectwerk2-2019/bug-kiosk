@extends('layouts.bug')

@section('content')

<div class="container">

    <br>
        <p>
                Welcome to the kiosk for BUG: Bug Universal Gamecontroller!
            </p>
            <p>
                BUG is the worlds most low power game console. 
                By using the LoRaWAN Internet of Things wireless technology, 
                BUG is able to communicate over long distances without using mucht power. 
                Therefore you won't need to think about batteries in the controller.
            </p>
            <p>
                You can add 4 dongles to the controller:  
                <ul>
                    <li>
                        One of the dongles is used to identify the player of the controller. 
                        This way, anyone could get a personal dongle. 
                        If you would like to play with any controller you just need to insert your personal dongle, 
                        and the game knows who you are.
                    </li>
                    <li>
                        The other 3 dongles are used to modify your game. 
                        Depending on the dongles you insert in your controller you could make personalize your tank.
                    </li>
                </ul>
            </p>
            <p>
                The Kiosk provides some information about the add-ons. 
                You can choose the function of each add-on. To program your dongle, you can go to kiosk home page.
                In the menu right above, you can chose for 'Program Dongles'. Here you can chose the functions you want to play with.
                When you have chosen the functions you want, just click the button below.
            </p>
            <p>
                You can find a list of all fuctions for the dongles in the Kiosk under "Dongles".
            </p>
</div>
@endsection
