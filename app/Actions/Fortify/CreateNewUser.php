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
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'password' => $this->passwordRules(),
			'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
			'idimage' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
			'passport' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
			'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
		])->validate();

		if (request()->hasFile('avatar')) {
			$avatar = request()->file('avatar');
			$avatarPath = $avatar->store('avatars', 'public'); // Assuming 'avatars' is your storage path
		}
	

		$user = User::create([
			'name' => $input['name'],
			'email' => $input['email'],
			'phone' => $input['phone'],
			'country' => $input['country'],
			'area_of_residence' => $input['area_of_residence'],
			'date_of_birth' => $input['date_of_birth'],
			'email' => $input['email'],
			'password' => Hash::make($input['password']),
			'avatar' => $avatarPath, // Save avatar path or filename in 'avatar' field
		]);

		if (request()->hasFile('idimage')) {
			$idimage = request()->file('idimage')->getClientOriginalName();
			request()->file('idimage')->storeAs('idimage', $user->id . '/' . $idimage);
			$user->update(['idimage' => $idimage]);
		}

		if (request()->hasFile('passport')) {
			$passport = request()->file('passport')->getClientOriginalName();
			request()->file('passport')->storeAs('passport', $user->id . '/' . $passport);
			$user->update(['passport' => $passport]);
		}

		return $user;
	}
}
