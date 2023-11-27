<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examterm extends Model
{
    use HasFactory;

    protected $fillables =[
        'examtitle',
        'startdate',
        'note'
    ];
}
