<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneInfo extends Model
{
    use HasFactory;


		protected $table = 'phone_info';

		protected $fillable = ['user_id', 'is_whatsapp', 'is_mpesa', 'category'];

		public function user()
		{
			return $this->belongsTo(User::class);
		}
	
}
