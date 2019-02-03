<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Client Side Pages
    
    public function getHome(){
        return view('client.home');
    }

    public function getDonate(){
        return view('client.donate');
    }

    public function getSponsorApp(){
        return view('client.sponsorapp');
    }

    public function getLogin(){
        return view('login');
    }

    public function getScholarApp(){
        return view('client.scholarapp');
    }

    public function getReferral(){
        return view('client.referral');
    }
    
    public function getRegister(){
        return view('client.register');
    }

    public function getSponsor(){
        return view('client.sponsormonitor');
    }

    public function getScholar(){
        return view('client.scholarmonitor');
    }

    public function getSocialWorker(){
        return view('client.swhome');
    }

    // Admin

    public function getDashboard(){
        return view('admin.dashboard');
    }

    public function getOrphans(){
        return view('admin.orphans');
    }

    public function getScholars(){
        return view('admin.scholars');
    }

    public function getSponsors(){
        return view('admin.sponsors');
    }
}
