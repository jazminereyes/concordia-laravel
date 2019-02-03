<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $primaryKey = 'sponsorid';
    protected $fillable = ['firstname', 'middlename', 'lastname', 'birthdate', 'email', 'contactnumber', 'street', 'city', 'zip', 'country', 'scholarcount', 'donationtype', 'amount', 'submissiondate', 'activedate', 'inactivitydate', 'applicationcode', 'applicationstatus', 'activeflag', 'preferenceid'];
}
