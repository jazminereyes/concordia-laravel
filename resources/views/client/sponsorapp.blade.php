@extends('layouts.app')

@section('title', '| Sponsor Application')

@section('content')

    @section('header')
      <div class="block-30 item" style="background-image: url('img/sponsor.jpg');" data-stellar-background-ratio="0.5">
    @endsection

    @section('text')
      <div class="col-md-7">
        <h2 class="heading">Become a sponsor.</h2>
      </div>
    @endsection

<div class="site-section fund-raisers">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 text-center">
          <h2>Sponsor Application</h2>
        </div>
      </div>

      <div class="row mb-5">
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
              <label class="lbl">E-mail</label>
              <input type="email" class="form-control" name="email"/>
            </div>
            <div class="col-lg-4">
              <label class="lbl">Contact Number</label> 
              <input type="text" class="form-control" name="contactnumber"/>
            </div>
          </div><br/>
          <div class="row">
            <div class="col-lg-4">
              <input type="text" class="form-control" name="street" placeholder="Address Line 1"/>
            </div>
            <div class="col-lg-3">
              <input type="text" class="form-control" name="city" placeholder="City"/>
            </div>
            <div class="col-lg-2">
              <input type="number" class="form-control" name="zip" placeholder="ZIP Code"/>
            </div>
            <div class="col-lg-3">
              <input type="text" class="form-control" name="country" placeholder="Country"/>
            </div>
          </div><br/><br/>

          <div class="row">
            <div class="col-lg-12">
              <div class="form-inline">
                <label>I wish to support</label><input type="number" name="scholarcount" class="form-control" min="1"/>
                <input type="radio" name="scholar" value="E"/>elementary student/s (Grade 1 to 6) for PHP 1,250 / US$30 per month in a school year.
                <input type="radio" name="scholar" value="HS"/>high school student/s (Grade 7 to 12) for PHP 1,500 / US$36 per month in a school year.
              </div>
            </div>
          </div><br/><br/>

          <div class="row">
            <div class="col-lg-12">
              <label>The total amount that I pledge to donate per school year is</label>
              <input type="text" disabled/>
              <label>(PHP 12,500 / US$300 a year per elementary student and PHP 15,000 / US$360 a year per high school student).</label>
            </div>
          </div><br/>

          <div class="row">
            <div class="col-lg-12">
              <div class="form-inline">
                <label>I will send my donation </label>
                <select class="form-control" name="type">
                  <option value="M">Monthly</option>
                  <option value="Y">Yearly</option>
                </select>
              </div>
            </div>
          </div><br/>

          <div class="row">
            <div class="col-lg-12">
              <div class="form-inline">
                <label>Do you have a preference for scholars?</label>
                <input type="radio" name="pref" value="Yes"/>Yes
                <input type="radio" name="pref" value="No"/>No
              </div>
            </div>
          </div>

          <input type="submit" class="btn btn-primary float-right" value="Submit"/>
        </form>

        
      </div>
    </div>
  </div> <!-- .section -->

  <div class="featured-donate overlay-color" style="background-image: url('public/img/children.jpg');">
    
    <div class="container">
      <div class="row">
        <div class="col-lg-4 order-lg-2 mb-3 mb-lg-0">
          <img src="{{ asset('img/children.jpg') }}" alt="Image placeholder" class="img-fluid">
        </div>
        <div class="col-lg-8 pr-lg-5">       
          <p>Before being assigned a scholar, you must make a deposit for a whole school year. Termination of the sponsorship may only be allowed after completing a yearly deposit.</p>
          <p> We will inform you of the name and age of your sponsored child/children and will update you and will update you on his/her progress. We will also provide you with the following items:</p>
          
          <p>
          <br/><i class="icon icon-check"></i>&nbsp;Picture and brief profile of the child/children(for new sponsor).
          <br/><i class="icon icon-check"></i>&nbsp;Introductory letter of the child/children(for new sponsor).
          <br/><i class="icon icon-check"></i>&nbsp;Correspondence from the child.
          <br/><i class="icon icon-check"></i>&nbsp;Mid-year progress report(June to October).
          <br/><i class="icon icon-check"></i>&nbsp;Annual progress report(November to May).
          <br/><i class="icon icon-check"></i>&nbsp;Copy of the Child/children's report card.
          <br/><i class="icon icon-check"></i>&nbsp;Thank you Letter of the child/children.
          </p>
        </div>
        
      </div>
    </div>

  </div> <!-- .featured-donate -->

  @endsection