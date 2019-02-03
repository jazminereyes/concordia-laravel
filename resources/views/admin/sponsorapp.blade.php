@extends('layouts.admin')

@section('title', 'Sponsor Applications')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Sponsor Applications</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <div class="modal" tabindex="-1" role="dialog" id="view">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Sponsor Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <label>Sponsor Name</label>
              <input type="text" class="form-control name" readonly/>
            </div>
            <div class="col-lg-6">
              <label>Address</label>
              <input type="text" class="form-control address" readonly/>
            </div>
          </div><br/>
          <div class="row">
            <div class="col-lg-4">
              <label>Birthdate</label>
              <input type="text" class="form-control birthdate" readonly/>
            </div>
            <div class="col-lg-4">
              <label>E-mail</label>
              <input type="text" class="form-control email" readonly/>
            </div><div class="col-lg-4">
              <label>Contact Number</label>
              <input type="text" class="form-control contact" readonly/>
            </div>
          </div><br/>
          <div class="row">
            <div class="col-lg-4">
              <label>Donation Type</label>
              <input type="text" class="form-control donationtype" readonly/>
            </div>
            <div class="col-lg-4">
              <label>Scholar Count</label>
              <input type="text" class="form-control scholar" readonly/>
            </div>
            <div class="col-lg-4">
              <label>Amount</label>
              <div class='input-group'>
                <div class='input-group-prepend'>
                  <span class='input-group-text'>Php</span>
                </div>
                <input type='text' class='form-control amount' readonly/><br/>
                <div class='input-group-append'>
                  <span class='input-group-text'>.00</span>
                </div>
              </div> 
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="text-center"><strong>Sponsor Applications</strong></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <th>Name</th>
                            <th>Country</th>
                            <th>Application Date</th>
                            <th>Action</th>

                            @foreach ($data as $dt)
                                <tr>
                                    <td>{{$dt->firstname." ".$dt->lastname}}</td>
                                    <td>{{$dt->country}}</td>
                                    <td>{{date('F d, o',strtotime($dt->created_at))}}</td>
                                    <td>
                                      <button class="btn btn-primary view" id="viewbtn" data-toggle="modal" data-ids="{{$dt->personid}}" data-target="#view">View</button>
                                      <button class="btn btn-success" data-toggle="modal" data-target="#accept">Accept</button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection