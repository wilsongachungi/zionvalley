<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
	use PasswordValidationRules;

	/**
	 * Validate and create a newly registered user.
	 *
	 * @param  array<string, string>  $input
	 */
	public function create(array $input): User
	{
		Validator::make($input, [
			'name' => ['required', 'string', 'max:255'],
			'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
			'phone' => ['required', 'string', 'max:255'],
			'password' => $this->passwordRules(),
			'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
			'idimage' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
			'passport' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
			'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
		])->validate();
		
		
		
		
	
		$avatarPath = null;
	
		if (request()->hasFile('avatar')) {
			$avatar = request()->file('avatar');
			$avatarPath = $avatar->store('avatars', 'public'); 
		}
		
		$userPhone = $input['phone'] ?? null;


		if (!empty($userPhone) && strlen($userPhone) >= 10) { // Example validation for minimum length
			// Check if phone number already exists in the database
			$existingUser = User::where('phone', $userPhone)->first();

			if ($existingUser) {
				// Handle duplicate phone number (e.g., throw an exception or return an error response)
				throw new \Exception("Phone number already exists. Please use a different phone number.");
			}
		}

		
	
		$user = User::create([
			'name' => $input['name'],
			'phone' => $input['phone'],						
			'password' => Hash::make($input['password']),
			'avatar' => isset($input['avatar']) ? $input['avatar'] : 'default_avatar.jpg',
		]);
		
		return $user;
	}
	
}