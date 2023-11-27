<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitinfo extends Model
{
    use HasFactory;

    protected $fillables = [
        'name'.'phone',
        'meet_user_type',
        'meet_user',
        'visitPurpose',
        'note'
    ];
}
