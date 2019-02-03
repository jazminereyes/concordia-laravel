<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Sponsor;
use App\Scholar;

class ApplicationController extends Controller
{
    public function display(Person $personid)
    {

    }

    public function check()
    {
        $code = request('appcode');
        $sponsor = Person::join('sponsors', 'people.personid', '=', 'sponsors.personid')->where('applicationcode', $code)->first();
        //$scholar = Person::join('scholars', 'people.personid', '=', 'scholars.personid')->join('app_forms', 'scholars.appformid', '=', 'app_forms.appformid')->where('applicationcode', $code)->get();
        //$union = $sponsor->union($scholar)->get();

        if($sponsor->type=='SP')
        {
            return view('client.sponsormonitor', compact('sponsor'));
        }
    }
}
