<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $userSocial = Socialite::driver($provider)->user();

        $user = User::where('email', $userSocial->getEmail())->first();

        if (!$user) {

            if (null !== $userSocial->getName()) {
                $name = $userSocial->getName();
            } else {
                $name = $userSocial->getNickname();
            }

            $user = User::create([
                'email' => $userSocial->getEmail(),
                'name' => $name,
                'provider_id' => $userSocial->getId(),
                'avatar' => $userSocial->getAvatar(),
            ]);
        }

        Auth::login($user, true);

        return redirect('/home');

    }
}
