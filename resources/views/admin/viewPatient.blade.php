@extends('layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">TRACING APP</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
              <li class="breadcrumb-item active">Patient</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <hr style="border: solid 2px #000;">
      <section class="content">
      <div class="container-fluid">
      	<div class="card">
      		<div class="card-header"><b>You are viewing {{$patient->firstname}} {{$patient->lastname}}</b></div>
      		<div class="card-body">
      			<div class="row">
      				<div class="col-4">
      					<p>Patient Name: <b>{{$patient->firstname}} {{$patient->lastname}}</b></p>
      				</div>
      				<div class="col-4">
      					<p>Patient ID: <b>{{$patient->patient_id}}</b></p>
      				</div>
      				<div class="col-4">
      					<p>Email: <b>{{$patient->email}}</b></p>
      				</div>
      				<div class="col-4">
      					<p>ID number: <b>{{$patient->id_number}}</b></p>
      				</div>
      				<div class="col-4">
      					<p>County: <b>{{$patient->county}}</b></p>
      				</div>
      				<div class="col-4">
      					<p>Sub County: <b>{{$patient->subcounty}}</b></p>
      				</div>
      				<div class="col-4">
      					<p>Village: <b>{{$patient->village}}</b></p>
      				</div>
      				<div class="col-4">
      					<p>Location: <b>{{$patient->location}}</b></p>
      				</div>
      				<div class="col-4">
      					<p>Gender: <b>{{$patient->gender}}</b></p>
      				</div>
      				<div class="col-4">
      					<p>D.O.B : <b>{{$patient->dob}}</b></p>
      				</div>
      				<div class="col-4">
      					<p>Guardian: <b>{{$patient->gurd_name}}</b></p>
      				</div>
      				<div class="col-4">
      					<p>Phone: <b>{{$patient->phonenumber}}</b></p>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
  </section>
     @endsection