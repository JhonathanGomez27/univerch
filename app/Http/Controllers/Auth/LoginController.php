<?php

namespace App\Http\Controllers\Auth;

use Str;
use Auth;
use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\SocialProfile;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($driver)
    {
        $drivers = ['facebook', 'google'];

        if(in_array($driver, $drivers)){
            return Socialite::driver($driver)->redirect();
        }else{
            return redirect()->route('login')->with('info', $driver . ' no es una aplicación valida para poder loguearse');
        }
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback (Request $request , $driver)
    {
        if($request->get('error')){
            return redirect()->route('login');
        }

        $userSocialite = Socialite::driver($driver)->user();

        $social_profile = SocialProfile::where('social_id', $userSocialite->getId())
                                        ->where('social_name', $driver)->first();


        if(!$social_profile){

            $user = User::where('email', $userSocialite->getEmail())->first();

            if(!$user){
                $user = User::create([
                    'name' => $userSocialite->getName(),
                    'email'=> $userSocialite->getEmail(),
                ]);
            }


            $social_profile = SocialProfile::create([
                'user_id' => $user->id,
                'social_id' => $userSocialite->getId(),
                'social_name' => $driver,
                'social_avatar'  => $userSocialite->getAvatar()
            ]);
        }

        auth()->login($social_profile->user);

        return redirect()->route('home');


        // $user->token;
    }
    public function redirectToGitHub()
    {
        return Socialite::driver('github')->redirect();
    }
    /**
     * Obtiene la información del usuario de GitHub.
     */
    public function handleGitHubCallback()
    {
        $githubUser = Socialite::driver('github')->user();
        return "Bienvenido {$githubUser->name} ({$githubUser->nickname})";
    }


    /*public function handleGitHubCallback()
    {
        $githubUser = Socialite::driver('github')->user();
        $appUser = User::firstOrCreate([
            'email' => $githubUser->getEmail()
        ], [
            'nickname' => $githubUser->getNickname(),
            'name' => $githubUser->getName(),
            'avatar' => $githubUser->getAvatar(),
        ]);
        auth()->login($appUser);
        return redirect('/')->with('alert', "Bienvenido {$appUser->name}");
    }*/



}
