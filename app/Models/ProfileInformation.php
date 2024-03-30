<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileInformation extends Model
{
    use HasFactory;
    
    protected $table = 'profile_information';

    protected $fillable = [
        'user_id',
        'email',
        'age',
        'country',
        'residence',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

}