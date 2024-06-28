<?php

namespace App\Models;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Identify extends Model
{
    use HasFactory;

    protected $fillable = ['identify_data', 'user_id']; // add user_id if needed

    // If you want to automatically decrypt the identify_data when accessing it
    public function getIdentifyDataAttribute($value)
    {
        return Crypt::decrypt($value);
    }

    // Define the relationship with the User model if needed
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
