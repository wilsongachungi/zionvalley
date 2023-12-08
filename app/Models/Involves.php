<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Involves extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'phone', 'country', 'idnumber', 'age', 'idphoto', 'select', 'passport_image',
    ];
    protected $table = 'Involves';
}
