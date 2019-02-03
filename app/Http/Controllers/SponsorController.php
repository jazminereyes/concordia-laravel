<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sponsor;
use App\Person;
use Alert;

class SponsorController extends Controller
{
    /*public function store(){
        //dd(request()->all());

        $this->validate(request(), [
            'birthdate' => 'required|date',
            'email' => 'required|unique:sponsors',
            'contactnumber' => 'required',
            'street' => 'required',
            'city' => 'required',
            'country' => 'required',
            'zip' => 'integer',
            'scholarcount' => 'required'
        ]);

        $donation = request('scholar').request('type');

        Sponsor::create([
            'firstname' => request('firstname'),
            'middlename' => request('middlename'),
            'lastname' => request('lastname'),
            'birthdate' => request('birthdate'),
            'email' => request('email'),
            'contactnumber' => request('contactnumber'),
            'street' => request('street'),
            'city' => request('city'),
            'zip' => request('zip'),
            'country' => request('country'),
            'scholarcount' => request('scholarcount'),
            'donationtype' => $donation,
            'activeflag' => '0',
        ]);

        return back();
    }*/

    public function store(){
        $this->validate(request(), [
            'birthdate' => 'required|date',
            'email' => 'required|unique:sponsors',
            'contactnumber' => 'required',
            'street' => 'required',
            'city' => 'required',
            'country' => 'required',
            'zip' => 'integer',
            'scholarcount' => 'required'
        ]);

        $person = new Person();
        $person->firstname = request('firstname');
        $person->middlename = request('middlename');
        $person->lastname = request('lastname');
        $person->type = 'SP';
        $person->save();
        $id = $person->personid;

        $donation = request('scholar').request('type');
        $code = $this->generatecode();

        if($donation=='EM'){
            $amount = '1200';
        } elseif($donation=='EY'){
            $amount = '12000';
        } elseif($donation=='HSM'){
            $amount = '1500';
        } else{
            $amount = '15000';
        }

        $sponsor = new Sponsor();
        $sponsor->personid = $id;
        $sponsor->birthdate = request('birthdate');
        $sponsor->email = request('email');
        $sponsor->contactnumber = request('contactnumber');
        $sponsor->street = request('street');
        $sponsor->city = request('city');
        $sponsor->zip = request('zip');
        $sponsor->country = request('country');
        $sponsor->scholarcount = request('scholarcount');
        $sponsor->donationtype = $donation;
        $sponsor->amount = $amount;
        $sponsor->submissiondate = date('Y-m-d');
        $sponsor->applicationcode = $code;
        $sponsor->applicationstatus = 'Pending';
        $sponsor->activeflag = '0';
        $sponsor->save();

        $message = 'Your form has been submitted. You can use the application code to view the progress of your application. \nApplication Code: '.$code;

        Alert::success('Your form has been submitted', 'Success!')->persistent("OK");

        return back();
    }

    public function generatecode(){
        $chars = "abcdefghijkmnopqrstuvwxyz0123456789"; 
        srand((double)microtime()*1000000); 
        $i = 0; 
        $pass = '' ; 
    
        while ($i <= 5) { 
            $num = rand() % 33; 
            $tmp = substr($chars, $num, 1); 
            $pass = $pass . $tmp; 
            $i++; 
        } 
    
        return $pass; 
    }

    public function display(){
        $data = Person::join('sponsors', 'people.personid', '=', 'sponsors.personid')->where('type', '=', 'SP')->where('applicationstatus', '=', 'Pending')->get();
        return view('admin.sponsorapp', compact('data'));
    }
    public function getInfo(Person $personid){
        //dd($personid);
        $response = Person::join('sponsors', 'people.personid', '=', 'sponsors.personid')->where('people.personid', '=', $personid->personid)->first();
        return response()->json($response);
    }
}
