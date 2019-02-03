<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $primaryKey = 'personid';
    protected $fillable = ['firstname', 'middlename', 'lastname', 'gender', 'photo', 'type'];
}
