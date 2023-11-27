<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examsuggestion extends Model
{
    use HasFactory;

    protected $fillables =[
        'suggesttit',
        'exam',
        'class',
        'subject',
        'suggest_img',
        'note'
    ];
}
