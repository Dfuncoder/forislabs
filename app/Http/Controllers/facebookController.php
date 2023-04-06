<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class facebookController extends Controller
{
    //login using facebook

    public function loginUsingFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFromFacebook()
    {
        try {
      
            $user = Socialite::driver('facebook')->user();
       
            $finduser = User::where('socialmedia_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->intended('dashboard');
       
            }else{
                $newUser = User::updateOrcreate([
                    'name' => $user->name,
                    'socialmedia_id'=> $user->id,
                    'socialmedia_provider' => 'facebook'
                    
                    
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/complete-register');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}