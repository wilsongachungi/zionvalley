<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harambee extends Model
{
	use HasFactory;

	protected $fillable = ['harambees','sent_to','comment'];

	/**
	 * Get the user that owns the harambee.
	 */
	public function user()
	{
		return $this->belongsTo(User::class, 'sent_to');
	}
}
