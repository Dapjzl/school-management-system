<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $fillables =[
        'firstname',
        'lastname',
        'phone',
        'address',
        'email',
        'NIN',
        'dob',
        'salary',
        'salary_type',
        'designation',
        'emp_type',
         'gender',
         'blood',
         'religion',
         'salary_grade',
         'degree',
         'resume',
         'facebook',
         'twitter',
         'others'
    ];
}
