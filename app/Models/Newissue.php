<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newissue extends Model
{
    use HasFactory;

    protected $fillables = [
        'book',
        'isbn',
        'edition',
        'author',
        'language',
        'price',
        'qty',
        'dueDate',
        'bookCover',
        'libraryMember'
    ];
}
