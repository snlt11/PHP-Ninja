<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    public $timestamps = false;
    protected $fillable = ['name', 'email', 'gender', 'date_of_birth', 'age'];
}
