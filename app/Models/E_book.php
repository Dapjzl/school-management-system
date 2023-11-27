<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class E_book extends Model
{
    use HasFactory;

    protected $fillables = [
        'class',
        'subject',
        'e_bookName',
        'edition',
        'author',
        'language',
        'coverImg',
        'e_bookImg'
    ];
}
