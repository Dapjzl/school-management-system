<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addclass extends Model
{
    use HasFactory;
    protected $fillables=[
        'classname',
        'numbericname',
        'teacher',
        'note'
    ];
}
