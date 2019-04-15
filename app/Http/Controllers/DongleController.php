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

        $body = json_decode($request->getContent(), true);

        $id_array = array();

        if (isset($body['dongle_id_1'])) {
            $dongle_id_1 = $body['dongle_id_1'];
            $dongle_1 = Dongle::where('dongle_hash', $dongle_id_1)->first();
            $dongle_1_id = $dongle_1->id;
            array_push($id_array, $dongle_1_id);
        }
        if (isset($body['dongle_id_2'])) {
            $dongle_id_2 = $body['dongle_id_2'];
            $dongle_2 = Dongle::where('dongle_hash', $dongle_id_2)->first();
            $dongle_2_id = $dongle_2->id;
            array_push($id_array, $dongle_2_id);
        }
        if (isset($body['dongle_id_3'])) {
            $dongle_id_3 = $body['dongle_id_3'];
            $dongle_3 = Dongle::where('dongle_hash', $dongle_id_3)->first();
            $dongle_3_id = $dongle_3->id;
            array_push($id_array, $dongle_3_id);
        }

        if (empty($id_array)) {
            return "Not a valid request!";
        } else {
            $user->dongles()->sync($id_array);
            return "Active dongles updated succesfully!";
        }
    }
}
