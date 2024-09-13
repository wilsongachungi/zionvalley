<?php

namespace App\Models;

use App\Models\Task;
use App\Models\Message;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon; // Import Carbon
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
	use HasApiTokens;
	use HasFactory;
	use HasProfilePhoto;
	use Notifiable;
	use TwoFactorAuthenticatable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'name',
		'email',
		'phone',
		'password',
		'avatar',
	];

	/**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array<int, string>
	 */
	protected $hidden = [
		'password',
		'remember_token',
		'two_factor_recovery_codes',
		'two_factor_secret',
	];

	/**
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	/**
	 * The accessors to append to the model's array form.
	 *
	 * @var array<int, string>
	 */
	protected $appends = [
		'profile_photo_url',
		'age', // Append 'age' attribute
	];

	/**
	 * Get the user's age based on the date of birth.
	 *
	 * @return int|null
	 */
	// public function getAgeAttribute()
	// {
	// 	$dob = $this->attributes['date_of_birth'];

	// 	return $dob ? Carbon::parse($dob)->age : null;
	// }

	public function messages(): HasMany
	{
		return $this->hasMany(Message::class);
	}

	public function tasks(): HasMany
	{
		return $this->hasMany(Task::class);
	}

	public function communications(): HasMany
	{
		return $this->hasMany(Communication::class, 'sender_id');
	}

	public function images()
	{
		return $this->hasMany(Image::class);
	}

	public function profileInformation()
	{
		return $this->hasOne(ProfileInformation::class);
	}
	public function identify()
	{
		return $this->hasOne(Identify::class);
	}

	public function harambees()
	{
		return $this->hasMany(Harambee::class, 'sent_to');
	}

	public function adminComments()
	{
		return $this->hasMany(AdminComment::class);
	}
}
