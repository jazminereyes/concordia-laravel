@extends('layouts.app')

@section('title', '| Scholar Application Monitoring')

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

        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <center><img src="{{ asset('img/no-image.jpg') }}" height="80" width="80"/></center>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="#" class="btn btn-primary btn-block sw">Profile</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="#" class="btn btn-primary btn-block sw">Referrals</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="#" class="btn btn-primary btn-block sw">Password</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center"><strong>Profile</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label><strong>Name</strong></label>
                            </div>
                            <div class="col-lg-6">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label><strong>E-mail</strong></label>
                            </div>
                            <div class="col-lg-6">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label><strong>Address</strong></label>
                            </div>
                            <div class="col-lg-6">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label><strong>Contact Number</strong></label>
                            </div>
                            <div class="col-lg-6">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label><strong>Endorser Agency</strong></label>
                            </div>
                            <div class="col-lg-6">
                            </div>
                        </div><br/>
                    </div>
                </div>
            </div>
        </div><br/>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="float-left"><strong>Referrals</strong></h5>
                        <a href="{{ url('/referral') }}" class="btn btn-primary float-right">Refer a Child</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <th>Child Name</th>
                            <th>Referral Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- .section -->


@endsection