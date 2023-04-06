<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ApiController extends Controller
{
    /**
 * google Login
 */
public function googleloginApi ()
{

   // Get the access token from the request
   $accessToken = $request->input('access_token');

   // Verify the access token using the Google API
   $client = new Google_Client(['client_id' => env('GOOGLE_CLIENT_ID')]);
   $payload = $client->verifyIdToken($accessToken);
   if (!$payload) {
       // Handle the invalid token error
   }

   // Get the user's Google ID from the payload
   $googleId = $payload['sub'];

   // Check if the user exists in the database
   $user = User::where('google_id', $googleId)->first();
   if (!$user) {
       // Create a new user if the user doesn't exist
       $user = new User();
       $user->name = $payload['name'];
       $user->socialmedia_id = $googleId;
       $user->socialmedia_provider = 'facebook';
       $user->save();
   }

   // Authenticate the user
   Auth::login($user);

   // Exchange the access token for an OAuth access token
   $response = Http::post('http://localhost:8000/oauth/token', [
       'grant_type' => 'social',
       'client_id' => 'your-client-id',
       'client_secret' => 'your-client-secret',
       'provider' => 'google',
       'access_token' => $accessToken,
       'google_id' => $googleId,
   ]);

   if ($response->ok()) {
       $oauthAccessToken = $response['access_token'];
       // Do something with the OAuth access token
   } else {
       // Handle the error response
   }

}

// facebook Api

public function facebookloginApi(Request $request)
{
    // Get the access token from the request
    $accessToken = $request->input('access_token');

    // Verify the access token using the Facebook API
    $fb = new \Facebook\Facebook([
        'app_id' => env('FACEBOOK_CLIENT_ID'),
        'app_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'default_graph_version' => 'v3.2',
    ]);
    
    try {
        $response = $fb->get('/me?fields=id,name,', $accessToken);
        $fbUser = $response->getGraphUser();
    } catch(\Facebook\Exceptions\FacebookResponseException $e) {
        // Handle the Facebook API error
    } catch(\Facebook\Exceptions\FacebookSDKException $e) {
        // Handle the Facebook SDK error
    }

    // Get the user's Facebook ID and email from the Graph API response
    $fbId = $fbUser->getId();

    // Check if the user exists in the database
    $user = User::where('facebook_id', $fbId)->first();
    if (!$user) {
        // Create a new user if the user doesn't exist
        $user = new User();
        $user->name = $fbUser->getName();
        $user->socialmedia_id = $fbId;
        $user->socialmedia_provider = 'facebook';
        $user->save();
    }

    // Authenticate the user
    Auth::login($user);

    // Exchange the access token for an OAuth access token
    $response = Http::post('http://localhost:8000/oauth/token', [
        'grant_type' => 'social',
        'client_id' => 'your-client-id',
        'client_secret' => 'your-client-secret',
        'provider' => 'facebook',
        'access_token' => $accessToken,
        'facebook_id' => $fbId,
    ]);

    if ($response->ok()) {
        $oauthAccessToken = $response['access_token'];
        // Do something with the OAuth access token
    } else {
        // Handle the error response
    }
}

}