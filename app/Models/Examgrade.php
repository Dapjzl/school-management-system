<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examgrade extends Model
{
    use HasFactory;
    protected $fillables =[
        'examgrade',
        'gradepoint',
        'markfrom',
        'markto',
        'note'
    ];
}
