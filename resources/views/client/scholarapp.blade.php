@extends('layouts.app')

@section('title', '| Scholar Application')

@section('content')

@section('header')
  <div class="block-30 item" style="background-image: url('img/sponsor.jpg');" data-stellar-background-ratio="0.5">
@endsection

@section('text')
  <div class="col-md-7">
    <h2 class="heading">Become a scholar.</h2>
  </div>
@endsection

<div class="site-section fund-raisers">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2>Scholar Application</h2>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-12">
                <form action="{{ url('/sw') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                    <div id="smartwizard">
                        <ul class="float-center">
                            <li><a href="#step-1">Step 1<br /><small>Basic Information&nbsp;<i class="icon icon-info-circle"></i></small></a></li>
                            <li><a href="#step-2">Step 2<br /><small>Medical Information<ion-icon name="icon icon-file-medical"></ion-icon></small></a></li>
                            <li><a href="#step-3">Step 3<br /><small>Hobbies</small></a></li>
                            <li><a href="#step-4">Step 4<br /><small>Family Background - Mother<ion-icon name="icon icon-user"></ion-icon></small></a></li>
                            <li><a href="#step-5">Step 5<br /><small>Family Background - Father</small></a></li>
                            <li><a href="#step-6">Step 6<br /><small>Other Information</small></a></li>
                        </ul>

                        <div></br>
                            <div id="step-1">
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
                                        <label>Nickname</label>
                                        <input type="text" class="form-control" name="nickname"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Birthdate</label>
                                        <input type="date" class="form-control" name="birthdate"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Gender</label>
                                        <input type="radio" class="flat-red" name="gender"/>Male
                                        <input type="radio" class="flat-red" name="gender"/>Female
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="street" placeholder="Address Line 1"/>
                                    </div>
                                    <div class="col-lg-3">
                                    <input type="text" class="form-control" name="city" placeholder="City"/>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" class="form-control" name="zip" placeholder="ZIP"/>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="school" placeholder="School Last Attended"/>
                                    </div>
                                    <div class="col-lg-4">
                                    <input type="text" class="form-control" name="gwa" placeholder="General Weighted Average"/>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Highest Educational Attainment</label>
                                        <select class="form-control" name="currentyrlvl">
                                            <option>Elementary - Grade 1</option>
                                            <option>Elementary - Grade 2</option>
                                            <option>Elementary - Grade 3</option>
                                            <option>Elementary - Grade 4</option>
                                            <option>Elementary - Grade 5</option>
                                            <option>Elementary - Grade 6</option>
                                            <option>High School - Grade 7</option>
                                            <option>High School - Grade 8</option>
                                            <option>High School - Grade 9</option>
                                            <option>High School - Grade 10</option>
                                            <option>Senior High School - Grade 11</option>
                                            <option>Senior High School - Grade 12</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Classification</label>
                                        <input type="radio" name="classification"/>In School
                                        <input type="radio" name="classification"/>Out of School
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Religion</label>
                                        <select class="form-control">
                                            <option>Roman Catholic</option>
                                            <option>Christian</option>
                                            <option>Iglesia Ni Cristo</option>
                                            <option>Islam</option>
                                            <option>Dating Daan</option>
                                            <option>Born Again</option>
                                        </select>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Referred By</label>
                                        <input type="text" class="form-control" name="referredby"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Relation to Referrer</label>
                                        <input type="text" class="form-control" name="relation"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Scholar Photo</label>
                                        <input type="file" class="form-control" name="scholarphoto"/>
                                    </div>
                                </div><br/>
                            </div>
                            <div id="step-2">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" name="height" placeholder="Height (cm)"/>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" name="weight" placeholder="Weight (kg)"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="discolormarks" placeholder="Distinguishing Marks (if any)"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="haircolor" placeholder="Hair Color"/>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="eyecolor" placeholder="Eye Color"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" name="skintone" placeholder="Skin Tone"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Does the child have an illness?</label>
                                        <input type="radio" name="child"/>Yes
                                        <input type="radio" name="child"/>No
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Specify if child has illness</label>
                                        <input type="text" class="form-control" name="illness"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>When was the child last hospitalized?</label>
                                        <input type="date" class="form-control" name="lastdh"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Where was the child last hospitalized?</label>
                                        <input type="text" class="form-control" name="lastph"/>
                                    </div>
                                </div><br/>
                            </div>
                            <div id="step-3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>Child Activities at Home</label>
                                        <textarea name="homeactivity" class="form-control"></textarea>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Child Activities Outside</label>
                                        <textarea name="outsideactivity" class="form-control"></textarea>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>Favorite Subject/s</label>
                                        <textarea name="favesubject" class="form-control"></textarea>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Favorite Sport</label>
                                        <textarea name="favesport" class="form-control"></textarea>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>Extra-curricular activities</label>
                                        <textarea name="extraco" class="form-control"></textarea>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Ambition</label>
                                        <textarea name="ambition" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div id="step-4">
                                <center><h2><strong>MOTHER</strong></h2></center>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Maiden Name</label>
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Birthdate</label>
                                        <input type="date" name="birthdate" class="form-control"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Civil Status</label>
                                        <select name="civilstatus" class="form-control">
                                            <option>Married</option>
                                            <option>Single Parent</option>
                                            <option>Widowed</option>
                                            <option>Separated</option>
                                            <option>Annulled</option>
                                            <option>Divorced</option>
                                            <option>Deceased</option>
                                        </select>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="cityaddress" class="form-control" placeholder="City Address"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="provaddress" class="form-control" placeholder="Province Address"/>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Place of Marriage</label>
                                        <input type="text" name="placemarriage" class="form-control"/>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Date of Marriage</label>
                                        <input type="date" name="datemarriage" class="form-control"/>
                                    </div>
                                    <div class="col-lg-2">
                                        <label>No. of Children</label>
                                        <input type="number" name="childcount" class="form-control"/>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Occupation</label>
                                        <input type="text" name="occupation" class="form-control"/>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Income</label>
                                        <input type="text" name="income" class="form-control"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Contact Number</label>
                                        <input type="text" name="contact" class="form-control"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Medical History</label>
                                        <textarea class="form-control" name="medicalhistory"></textarea>
                                    </div>
                                </div><br/>
                            </div>
                            <div id="step-5">
                                <center><h2><strong>FATHER</strong></h2></center>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Birthdate</label>
                                        <input type="date" name="birthdate" class="form-control"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Civil Status</label>
                                        <select name="civilstatus" class="form-control">
                                            <option>Married</option>
                                            <option>Single Parent</option>
                                            <option>Widowed</option>
                                            <option>Separated</option>
                                            <option>Annulled</option>
                                            <option>Divorced</option>
                                            <option>Deceased</option>
                                        </select>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="cityaddress" class="form-control" placeholder="City Address"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="provaddress" class="form-control" placeholder="Province Address"/>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Place of Marriage</label>
                                        <input type="text" name="placemarriage" class="form-control"/>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Date of Marriage</label>
                                        <input type="date" name="datemarriage" class="form-control"/>
                                    </div>
                                    <div class="col-lg-2">
                                        <label>No. of Children</label>
                                        <input type="number" name="childcount" class="form-control"/>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Occupation</label>
                                        <input type="text" name="occupation" class="form-control"/>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Income</label>
                                        <input type="text" name="income" class="form-control"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Contact Number</label>
                                        <input type="text" name="contact" class="form-control"/>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Medical History</label>
                                        <textarea class="form-control" name="medicalhistory"></textarea>
                                    </div>
                                </div><br/>
                            </div><br/>
                            <div id="step-6">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Home Type</label>
                                        <select class="form-control" name="hometype">
                                            <option>Concrete</option>
                                            <option>Semi-Concrete</option>
                                            <option>Scraps of Wood/G.I. Sheet</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Home Status</label>
                                        <select class="form-control" name="homestatus">
                                            <option>Owned</option>
                                            <option>Rented</option>
                                            <option>Living with Relatives</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>House Monthly Cost<label>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'>Php</span>
                                            </div>
                                            <input type='text' class='form-control' name="housecost" readonly/><br/>
                                            <div class='input-group-append'>
                                                <span class='input-group-text'>.00</span>
                                            </div>
                                        </div> 
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Electricity Type</label>
                                        <select class="form-control" name="hometype">
                                            <option>Legal Connection</option>
                                            <option>Illegal Connection</option>
                                            <option>Shared Connection</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Electricity Monthly Cost<label>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'>Php</span>
                                            </div>
                                            <input type='text' class='form-control' name="electricitycost" readonly/><br/>
                                            <div class='input-group-append'>
                                                <span class='input-group-text'>.00</span>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-lg-2">
                                        <label>Individual Count</label>
                                        <input type="number" name="indivcount" class="form-control"/>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Food Type</label>
                                        <select class="form-control" name="foodtype">
                                            <option>Turo-Turo/Lutong Ulam</option>
                                            <option>Marketing/Cooking</option>
                                        </select>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Water Type</label>
                                        <select class="form-control" name="hometype">
                                            <option>Legal Connection</option>
                                            <option>Illegal Connection</option>
                                            <option>Shared Connection</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Water Monthly Cost<label>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'>Php</span>
                                            </div>
                                            <input type='text' class='form-control' name="watercost" readonly/><br/>
                                            <div class='input-group-append'>
                                                <span class='input-group-text'>.00</span>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Bathroom Type</label>
                                        <select class="form-control" name="bathroomtype">
                                            <option>Owned</option>
                                            <option>Throw away</option>
                                            <option>Shared</option>
                                        </select>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Annual educational expense (inclusive of tuition fee and expense on school supplies)<label>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'>Php</span>
                                            </div>
                                            <input type='text' class='form-control' name="educexpense" readonly/><br/>
                                            <div class='input-group-append'>
                                                <span class='input-group-text'>.00</span>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Annual medical expense of the whole family<label>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'>Php</span>
                                            </div>
                                            <input type='text' class='form-control' name="medexpense" readonly/><br/>
                                            <div class='input-group-append'>
                                                <span class='input-group-text'>.00</span>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Other expenses (inclusive of hygiene and emergency expenses)<label>
                                        <div class='input-group'>
                                            <div class='input-group-prepend'>
                                                <span class='input-group-text'>Php</span>
                                            </div>
                                            <input type='text' class='form-control' name="otherexpense" readonly/><br/>
                                            <div class='input-group-append'>
                                                <span class='input-group-text'>.00</span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <input type="submit" value="Submit" name="submit" class="btn btn-primary float-right"/><br/><br/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> <!-- .section -->


@endsection