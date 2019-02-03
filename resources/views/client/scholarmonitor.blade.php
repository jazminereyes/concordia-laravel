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
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2>My Application</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <center><img src="{{ asset('img/no-image.jpg') }}" height="150" width="150"/></center>
                    </div>
                    <div class="card-body">
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
                                <label>Scholar Name</label>
                                <input type="text" class="form-control" readonly/>
                            </div>
                            <div class="col-lg-4">
                                <label>Birthdate</label>
                                <input type="text" class="form-control" readonly/>
                            </div>
                            <div class="col-lg-4">
                                <label>Religion</label>
                                <input type="text" class="form-control" readonly/>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Address</label>
                                <input type="text" class="form-control" readonly/>
                            </div>
                            <div class="col-lg-6">
                                <label>School</label>
                                <input type="text" class="form-control" readonly/>
                            </div>
                        </div><br/>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Current Year Level</label>
                                <input type="text" class="form-control" readonly/>
                            </div>
                            <div class="col-lg-4">
                                <label>General Weighted Average</label>
                                <input type="text" class="form-control" readonly/>
                            </div>
                            <div class="col-lg-4">
                                <label>Referred By</label>
                                <input type="text" class="form-control" readonly/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- .section -->


@endsection