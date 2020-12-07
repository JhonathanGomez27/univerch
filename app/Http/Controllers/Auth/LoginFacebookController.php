<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class LoginFacebookController extends Controller
{
    public function redirect()
{
    return Socialite::driver('facebook')->redirect();
}
}
