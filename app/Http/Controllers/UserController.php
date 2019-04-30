<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        return $request->user();
    }

    public function getUserByDeviceId(Request $request, $device_id, $user_dongle_id = null)
    {
        if (User::where('user_dongle_id', $user_dongle_id)->first() == null) {
            return response('Invalid user_dongle_id', 404);
        } else {
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
}
