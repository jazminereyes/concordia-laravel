@extends('layouts.app')

@section('title', '| Social Worker Registration')

@section('content')

@section('header')
  <div class="block-30 item" style="background-image: url('img/sponsor.jpg');" data-stellar-background-ratio="0.5">
@endsection

@section('text')
  <div class="col-md-7">
    <h2 class="heading">Register for child referrals.</h2>
  </div>
@endsection

<div class="site-section fund-raisers">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2>Social Worker Registration</h2>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-12">
                <form action="{{ url('/social') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <?php
                    //dd($errors);
                ?>
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
                        <div class="col-lg-6">
                            <label class="lbl">Birthday</label>
                            <input type="date" name="birthdate" class="form-control"/>
                        </div>
                        <div class="col-lg-6">
                            <label>E-mail</label>
                            <input type="text" name="email" class="form-control"/>
                        </div>
                    </div><br/>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="address" class="form-control" placeholder="Address"/>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="contact" class="form-control" placeholder="Contact Number"/>
                        </div>
                    </div><br/>
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="lbl">Endorser Agency</label>
                            <input type="text" name="endorser" class="form-control" placeholder="Endorser Agency"/>
                        </div>
                        <div class="col-lg-6">
                            <label>Identification Card</label>
                            <input type="file" name="idcard" class="form-control" placeholder="Identification Card"/>
                        </div>
                    </div><br/>

                    <input type="submit" class="btn btn-primary float-right" value="Submit" name="submit"/>
                </form>
            </div>
        </div>
    </div>
</div> <!-- .section -->


@endsection