<?php

namespace App\Models;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Identify extends Model
{
    use HasFactory;

    protected $fillable = ['identify_data', 'user_id']; // add user_id if needed


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
