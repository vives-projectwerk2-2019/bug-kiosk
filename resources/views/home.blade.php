@extends('layouts.bug')

@section('content')

<div class="container">

    <img id="bug-logo" src="/images/home/bug-logo.png" alt="Bug Logo" width="40%" height="40%">
    <br>
        <p id="home-title">
            Welcome to the kiosk for BUG: Bug Universal Gamecontroller!
        </p>
        <p id="home-text">
            BUG is the worlds most low power game console. 
            By using the LoRaWAN Internet of Things wireless technology, 
            BUG is able to communicate over long distances without using mucht power. 
            Therefore you won't need to think about batteries in the controller.
        </p>
        <div class="icons">
            <ul>
                <li class="icon_left">
                    <img class="icons_indiv" src="/images/home/kiosk.png" alt="kiosk icon" width="30%" height="30%">
                    <p class="icon_text">Kiosk</p>
                    <p>In the kiosk,you can find a logger and information about the dongles. 
                        You can also program and view your dongle and edit your profile. </p>
                </li>
                <li class="icon_middle">
                    <img class="icons_indiv" src="/images/home/database.png" alt="database icon" width="30%" height="30%">
                    <p class="icon_text">Database</p>
                    <p>When a user is made, the information is stored into a database. 
                        All LoraWAN packets are also processed and saved. </p>
                </li>
                <li class="icon_right">
                    <img class="icons_indiv" src="/images/home/iot.png" alt="IoT icon" width="30%" height="30%">
                    <p class="icon_text">LoraWAN</p>
                    <p>To make our controller wireless, we equipped it with a wireless technology. 
                        LoRaWAN is low power and does not necessarily need any receiver close by. </p>
                </li>
                <li class="icon_left">
                    <img class="icons_indiv" src="/images/home/controller.png" alt="controller icon" width="30%" height="30%">
                    <p class="icon_text">Controller</p>
                    <p>We built the controller without any hardware for controls. 
                        We achieved this by using capacitive touch. </p>
                </li>
                <li class="icon_middle">
                    <img class="icons_indiv" src="/images/home/dongle.png" alt="dongle icon" width="30%" height="30%">
                    <p class="icon_text">Dongles</p>
                    <p>One of the dongles is used to identify the player of the controller. 
                        This way, anyone could get a personal dongle. The other 3 dongles are used to modify your game.</p>
                </li>
                <li class="icon_right">
                    <img class="icons_indiv" src="/images/home/network.png" alt="network icon" width="30%" height="30%">
                    <p class="icon_text">Social Media</p>
                    <p>To make an account, you can simply log into your Facebook, Github, Google or Twitter.</p>
                </li>
            </ul>
        </div>
</div>
@endsection
