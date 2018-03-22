<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Socialite;
use Auth;
use App\User;

class AuthController extends Controller
{
	public function redirectToFacebook(){
		return Socialite::driver('facebook')->fields([
            'first_name', 'last_name', 'email', 'gender', 'birthday', 'likes'
        ])->scopes([
            'email', 'user_birthday'
        ])->redirect();
		// return Socialite::with('facebook')->redirect();
	}

	public function getFacebookCallback()
 {
		$data = Socialite::with('facebook')->user();
		$user = User::where('email', $data->email)->first();
		// $cookie = cookie::make('gender', $data->email, 120);
		

		if(!is_null($user)) {
			// login the user if email supplied by facebook exist in our database
			Auth::login($user);
			session(['avatar' => $data->getAvatar()]);
		} else {

	 		// Create a new user if the email supplied does not exist
	 			$user = new User();
				$user->name = $data->user['name'];
				$user->email = $data->email;
				$user->facebook_id = $data->id;
				$user->password = md5('airon');
		 		$user->save();
		 		
		 		// login the user after saving
		 		Auth::login($user);
	 		}
 		return redirect('/')->with('success', $data->email);
  	}

}

