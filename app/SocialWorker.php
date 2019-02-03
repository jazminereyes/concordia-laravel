<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialWorker extends Model
{
    protected $primaryKey = 'socialworkerid';
    protected $fillable = ['personid', 'email', 'birthdate', 'address', 'contactnumber', 'endorseragency', 'identification', 'application', 'dateapplied', 'verifiedflag'];
}
