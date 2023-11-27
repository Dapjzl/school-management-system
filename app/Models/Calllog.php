<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calllog extends Model
{
    use HasFactory;

    protected $fillables = [
        'name',
        'phone',
        'callDur',
        'callDate',
        'followUp',
        'callType',
        'note'
    ];
}
