<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    use HasFactory;
    protected $fillables =[
        'name',
        'type',
        'address',
        'note',
    ];
    protected $table = "hostels";
}
