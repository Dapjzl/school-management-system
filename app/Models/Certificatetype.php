<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificatetype extends Model
{
    use HasFactory;

    protected $fillables =[
        'certname','schoolname','certtext','footlefttext','footmidtext','footrighttext','back_img'
    ];
}
