@extends('layouts.app')

@section('title', '| Sponsor Application Monitoring')

@section('content')

@section('header')
  <div class="block-30 item" style="background-image: url('img/sponsor.jpg');" data-stellar-background-ratio="0.5">
@endsection

@section('text')
  <div class="col-md-7">
    <h2 class="heading">Monitor your application.</h2>
  </div>
@endsection

<div class="site-section fund-raisers">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2>My Application</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <center><i class="icon icon-user"></i>&nbsp;Account Details</center>
                    </div>
                    <div class="card-body text-center">
                        <label><strong>Application Date:</strong> {{date('F d, o', strtotime($sponsor->created_at))}}</label>
                        <label><strong>Application Status:</strong> {{$sponsor->applicationstatus}}</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center"><strong>Application Form Details</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Sponsor Name</label>
                                <input type="text" class="form-control" value="{{$sponsor->firstname." ".$sponsor->lastname}}" readonly/>
                            </div>
                            <div class="col-lg-4">
                                <label>Birthdate</label>
                                <input type="text" class="form-control" value="{{date('F d, o', strtotime($sponsor->birthdate))}}" readonly/>
                            </div>
                            <div class="col-lg-4">
                                <label>Contact Number</label>
                                <input type="text" class="form-control" value="{{$sponsor->contactnumber}}" readonly/>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Address</label>
                                <input type="text" class="form-control" value="{{$sponsor->street." ".$sponsor->city." ".$sponsor->zip." ".$sponsor->country}}" readonly/>
                            </div>
                            <div class="col-lg-6">
                                <label>E-mail</label>
                                <input type="text" class="form-control" value="{{$sponsor->email}}" readonly/>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Donation Type</label>
                                <input type="text" class="form-control" value="{{$sponsor->donationtype}}" readonly/>
                            </div>
                            <div class="col-lg-4">
                                <label>Scholar Count</label>
                                <input type="text" class="form-control" value="{{$sponsor->scholarcount}}"readonly/>
                            </div>
                            <div class="col-lg-4">
                                <label>Amount</label>
                                <div class='input-group'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text'>Php</span>
                                    </div>
                                    <input type='text' class='form-control' value="{{$sponsor->amount}}" readonly/><br/>
                                    <div class='input-group-append'>
                                        <span class='input-group-text'>.00</span>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- .section -->


@endsection