<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultemail extends Model
{
    use HasFactory;

    protected $fillables=[
        'rectype',
        'studresult',
        'subject',
        'emailbody'
    ];
}
