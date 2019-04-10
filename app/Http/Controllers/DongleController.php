<?php

namespace App\Http\Controllers;

use App\Dongle;
use App\User;
use Illuminate\Http\Request;

class DongleController extends Controller
{
    public function get_dongles()
    {
        return Dongle::All();
    }

    public function activate(Request $request, $user_dongle_id)
    {
        $user = User::where('user_dongle_id', $user_dongle_id)->first();
        $user_id = $user->id;

        $body = json_decode($request->getContent(), true);

        $dongle_id_1 = $body['dongle_id_1'];
        $dongle_id_2 = $body['dongle_id_2'];
        $dongle_id_3 = $body['dongle_id_3'];

        $dongle_1 = Dongle::where('dongle_hash', $dongle_id_1)->first();
        $dongle_1_id = $dongle_1->id;
        $dongle_2 = Dongle::where('dongle_hash', $dongle_id_2)->first();
        $dongle_2_id = $dongle_2->id;
        $dongle_3 = Dongle::where('dongle_hash', $dongle_id_3)->first();
        $dongle_3_id = $dongle_3->id;

        $id_array = array($dongle_1_id, $dongle_2_id, $dongle_3_id);

        $user->dongles()->sync($id_array);
    }
}
