<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marksms extends Model
{
    use HasFactory;

    protected $fillables =[
        'exam',
        'rectype',
        'studmark',
        'sms'
    ];
}
