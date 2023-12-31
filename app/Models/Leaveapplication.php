<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaveapplication extends Model
{
    use HasFactory;

    protected $fillables = [
        'applicationType',
        'applicant',
        'leaveType',
        'leaveFrom',
        'leaveTo',
        'status',
        'leaveReason',
        'leaveAttach'
    ];
}
