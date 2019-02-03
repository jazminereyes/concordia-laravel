<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\SocialWorker;
use Alert;

class SocialWorkerController extends Controller
{
    public function create(){

        $this->validate(request(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:social_workers',
            'birthdate' => 'required|date',
            'contact' => 'required',
            'endorser' => 'required',
            'idcard' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        
        $person = new Person();
        $person->firstname = request('firstname');
        $person->middlename = request('middlename');
        $person->lastname = request('lastname');
        $person->type = 'SW';
        $person->save();
        $id = $person->personid;

        $sw = new SocialWorker();
        $sw->personid = $id;
        $sw->email = request('email');
        $sw->birthdate = request('birthdate');
        $sw->address = request('address');
        $sw->contactnumber = request('contact');
        $sw->endorseragency = request('endorser');
        $sw->dateapplied = date('Y-m-d');
        $sw->verifiedflag = '0';
        $sw->applicationphoto = '0';

        if (request()->hasFile('idcard')) {
            $image = request()->file('idcard');
            $fileName = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('sw');
            $image->move($destinationPath, $fileName);

            //$fileName = md5($image->getClientOriginalName() . time()) . "." . $image->getClientOriginalExtension();
            //$image->move('./sw/', $fileName);
            $sw->identification = $fileName;
        }

        $sw->save();

        Alert::success('Your form has been submitted', 'Success!')->persistent("OK");

        return back();
    }

    public function display(){
        $data = Person::join('social_workers', 'people.personid', '=', 'social_workers.personid')->where('type', '=', 'SW')->where('verifiedflag', '=', '0')->get();
        return view('admin.swapp', compact('data'));
    }
}
