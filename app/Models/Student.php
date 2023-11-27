<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillables =[
        'firstname',
        'lastname',
        'dob',
        'gender',
        'NIN',
        'phone',
        'email',
        'admitdate',
        'admitno',
        'religion',
        'student_img',
        'parentfirst',
        'parentlast',
        'parentdob',
        'parentphone',
        'parentprof',
        'parentaddr',
        'guarfirst',
        'guarlast',
        'guardob',
        'guargender',
        'guarphone',
        'guarprof',
        'guaradd',
        'studtype',
        'class',
        'section',
        'group',
        'rollno',
        'regno',
        'discount',
        'seclang',
        'prevschool',
        'prevclass',
        'transfercertificate',
        'first_choice',
        'second_choice',
        'state',
        'address',
        'lga',
        'postal',
        'waec',
        'bsc',
        'nationality'
    ];
}

