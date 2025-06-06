<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	public function username()
	{
		$login = request()->input('login');
		$field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone_number';
		request()->merge([$field => $login]);
		return $field;
	}

	public function login(Request $request)
	{
		$credentials = $request->only($this->username(), 'password');

		if (Auth::attempt($credentials)) {
			// Authentication passed...
			return redirect()->intended('/dashboard');
		}

		return back()->withErrors([
			'login' => __('The provided credentials do not match our records.'),
		]);
	}
}
