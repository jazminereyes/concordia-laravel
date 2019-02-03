@extends('layouts.admin')

@section('title', 'Social Worker Applications')

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
              <li class="breadcrumb-item active">Social Worker Applications</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


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
                            <th>Endorser Agency</th>
                            <th>Application Date</th>
                            <th>Action</th>

                            @foreach ($data as $dt)
                                <tr>
                                    <td>{{$dt->firstname." ".$dt->lastname}}</td>
                                    <td>{{$dt->endorseragency}}</td>
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