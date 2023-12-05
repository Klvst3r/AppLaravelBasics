<?php

namespace App\Http\Controllers\Auth;

use App\User;

use Validator;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\ThrottlesLogins;

use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class Authcontroller extends Controller

{

	/*
		Registration & Login controller
		-------------------------------


		This controller handles the registration of new users, as well as the authenticathion of existing users.
		By default, this controller uses a simple trait to add the behaviors. Why don't you explorer it?

	*/


		use AuthenticatesAndRegistersUsers, ThrottlesLogins;


	/*
	 * Where to redirect usersafter login / registration.
	 *
	 * @var string
	*/	
	protected $redirectTo = '/';



}
