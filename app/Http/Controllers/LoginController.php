<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	public function username()
	{
		$login = request()->input('login');
		$field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';
		request()->merge([$field => $login]);
		return $field;
	}

	public function login(Request $request)
	{

		$request->validate([
			$this->username() => 'required|string',
			'password' => 'required|string',
		]);


		$credentials = $request->only($this->username(), 'password');

		if (Auth::attempt($credentials)) {

			return redirect()->intended('/home');
		} else {

			return back()->withErrors([
				'login' => __('These credentials do not match our records.'),
			]);
		}
	}
}
