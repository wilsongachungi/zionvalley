<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
	// ... Other code ...
	protected $fillable = [
		'user_id',
		'message',
		'admin_reply',
	];
	/**
	 * Get the user that owns the message.
	 */
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
