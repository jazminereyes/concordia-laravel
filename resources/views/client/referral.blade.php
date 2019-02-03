@extends('layouts.app')

@section('title', '| Sponsor Application')

@section('content')

@section('header')
  <div class="block-30 item" style="background-image: url('img/sponsor.jpg');" data-stellar-background-ratio="0.5">
@endsection

@section('text')
  <div class="col-md-7">
    <h2 class="heading">Refer a child.</h2>
  </div>
@endsection

<div class="site-section fund-raisers">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2>Child Referral</h2>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-12">
                <form action="{{ url('/store') }}" method="post">
                {{csrf_field()}}
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="firstname" placeholder="First Name"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="middlename" placeholder="Middle Name"/>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="lastname" placeholder="Last Name"/>
                        </div>
                    </div><br/>

                    <div class="row">
                        <div class="col-lg-4">
                            <label class="lbl">Birthday</label>
                            <input type="date" name="birthdate" class="form-control"/>
                        </div>
                        <div class="col-lg-4">
                            <label>Gender</label>
                            <input type="radio" name="gender" class="form-check-input" value="M"/>Male 
                            <input type="radio" name="gender" class="form-check-input" value="F"/>Female
                        </div>
                        <div class="col-lg-4">
                            <label>Religion</label>
                            <select class="form-control" name="religion">
                                <option value="Roman Catholic">Roman Catholic</option>
                                <option value="Roman Catholic">Christian</option>
                                <option value="Roman Catholic">Iglesia Ni Cristo</option>
                                <option value="Roman Catholic">Islam</option>
                                <option value="Roman Catholic">Dating Daan</option>
                                <option value="Roman Catholic">Born Again</option>
                            </select>
                        </div>
                    </div><br/>
                    <div class="row">
                        <div class="col-lg-6">
                            <label>Case Status</label>
                            <select class="form-control" name="casestatus">
                                <option value="Foundling">Foundling</option>
                                <option value="Neglected">Neglected</option>
                                <option value="Abandoned">Abandoned</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Place Found</label>
                            <input type="text" class="form-control" name="placefound"/>
                        </div>
                    </div><br/><br/>

                    <hr>

                    <h2 class="text-center">Referral Documents</h2><br/>

                    <div class="row">
                        <div class="col-lg-4">
                            <label>Child Photo</label>
                            <input type="file" name="photo" class="form-control"/>
                        </div>
                        <div class="col-lg-4">
                            <label>Referral Letter</label>
                            <input type="file" name="referral" class="form-control"/>
                        </div>
                        <div class="col-lg-4">
                            <label>Medical Abstract</label>
                            <input type="file" name="referral" class="form-control"/>
                        </div>
                    </div><br/>

                    <div class="row">
                        <div class="col-lg-6">
                            <label>Birth Certificate</label>
                            <input type="file" name="photo" class="form-control"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Brgy. Blotter</label>
                            <input type="file" name="referral" class="form-control"/>
                        </div>
                    </div><br/>

                    <input type="submit" class="btn btn-primary float-right" value="Submit"/>
                </form>
            </div>
        </div>
    </div>
</div> <!-- .section -->


@endsection