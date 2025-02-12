<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'studentid';

    protected $fillable = [
        'fname',
        'lname',
        'gender',
        'dateofb',
        'contactnumber',
        'email',
        'address',
        'enrollmentdate'
    ];

    protected $dates = [
        'dateofb',
        'enrollmentdate'
    ];
}