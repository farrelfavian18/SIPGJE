<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try{

            $google_user = Socialite::driver('google')->user();

            $user = User::whrere('google_id',$google_user->getId())->first();

            if(!$user){
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()
                ]);

                Auth::login($new_user);
                return redirect()->intended('admin/dashboard');
            }
            else{
                Auth::login($user);
                return redirect()->intended('admin/dashboard');
            }

        } catch(\Throwable $th) 
        {
            dd('Something went wrong'.$th->getMessage());
        }
    }
}
