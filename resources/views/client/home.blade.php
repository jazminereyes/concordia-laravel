@extends('layouts.app')

@section('content')

    @section('header')
      <div class="block-30 item header" data-stellar-background-ratio="0.5">
    @endsection

    @section('text')
      <div class="col-md-7">
        <h2 class="heading">Help us fulfill dreams.</h2>
      </div>
    @endsection

<div class="site-section">
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-charity"></span></div>
            <div class="media-body">
              <h3 class="heading">Be a Sponsor</h3>
              <p>Be the light to children in need for them to receive quality education that will transform their lives.</p>
              <p><a href="{{ url('/sponsorapp') }}">Apply</a></p>
            </div>
          </div>     
        </div>

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-people"></span></div>
            <div class="media-body">
              <h3 class="heading">Be a Scholar</h3>
              <p>Complete your studies with the help of the Educational Assistance thru Scholarship of Concordia.</p>
              <p><a href="{{ url('/scholarapp') }}">Apply</a></p>
            </div>
          </div>  
        </div>

        <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-heart-box"></span></div>
            <div class="media-body">
              <h3 class="heading">Residential Center</h3>
              <p>Refer a child who might be left on the street hungry and alone without a supportive and guiding hand to provide them a safe, happy, and healthy home.</p>
              <p><a href="{{ url('/referral') }}">Refer</a></p>
            </div>
          </div> 
        </div>

      </div>
    </div>
  </div> <!-- .site-section -->



  <div class="featured-donate overlay-color" style="background-image: url('public/img/children.jpg');">
    
    <div class="container">
      <div class="row">
        <div class="col-lg-8 order-lg-2 mb-3 mb-lg-0">
          <img src="{{ asset('img/children.jpg') }}" alt="Image placeholder" class="img-fluid">
        </div>
        <div class="col-lg-4 pr-lg-5">
          <span class="featured-text mb-3 d-block">Featured</span>
          <h2>Keep our children healthy</h2>
          <p class="mb-3">Good health is the foundation of a child's optimum development. Donate now to help us support the children.</p>
          <p><a href="#" class="btn btn-primary btn-hover-white py-3 px-5">Donate Now</a></p>
        </div>
        
      </div>
    </div>

  </div> <!-- .featured-donate -->

  <div class="featured-section overlay-color-2" style="background-image: url('public/img/success.jpg');">
    
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <img src="{{ asset('img/success.jpg') }}" alt="Image placeholder" class="img-fluid">
        </div>

        <div class="col-md-6 pl-md-5">
          <span class="featured-text d-block mb-3">Success Stories</span>
          <h2>The Angel Who Found Her Home</h2>
          <p class="mb-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
        
      </div>
    </div>

  </div> <!-- .featured-donate -->

  @endsection