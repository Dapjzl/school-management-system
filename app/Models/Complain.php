<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;
    protected $fillables = [
        'cuser_type',
        'complain_type',
        'complain_date',
        'complain'
    ];
}
