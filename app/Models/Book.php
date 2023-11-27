<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillables = [
        'booktitle',
        'bookid',
        'isbnno',
        'edition',
        'author',
        'language',
        'price',
        'qty',
        'almira',
        'cover'
    ];
}
