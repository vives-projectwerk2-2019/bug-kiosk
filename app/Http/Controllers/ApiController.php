<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getUser(Request $request)
    {
        return $request->user();
    }

    public function getUserByDeviceId(Request $request, $device_id, $user_dongle_id = null)
    {

        if ($user_dongle_id == null) {
            $user = User::where('device_id', $device_id)->first();
            return $user;
        } else {
            $user = User::where('user_dongle_id', $user_dongle_id)->first();

            $user->device_id = $device_id;
            $user->save();

            return $user;
        }
    }
}
