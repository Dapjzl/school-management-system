<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examschedule extends Model
{
    use HasFactory;

    protected $fillables =[
        'examtype',
        'class',
        'subject',
        'examdate',
        'starttime',
        'endtime',
        'roomno',
        'note'
    ];
}
