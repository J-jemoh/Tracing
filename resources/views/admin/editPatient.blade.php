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
              <li class="breadcrumb-item active">Update Patient</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <hr style="border: solid 2px #000;">
     <section class="content">
      <div class="container-fluid">
      	<div class="card">
      		<div class="card-header"><b>Update patient {{$patient->firstname}}</b></div>
      		<div class="card-body">
      			<form method="post" action="{{route('patient.update',$patient->id)}}">
              @csrf
      				<div class="row">
      					<div class="col-4">
					      <input type="number" class="form-control" placeholder="Patient ID" name="patientID" required value="{{$patient->patient_id}}">
      					</div>
      					<div class="col-4">
      						<input type="text" class="form-control" placeholder="First name" name="Fname" required value="{{$patient->firstname}}">
      					</div>
      					<div class="col-4">
      						<input type="text" class="form-control" placeholder="Last name" name="Lname" required value="{{$patient->lastname}}">
      					</div>
      				</div>
      				<br>
      				<br>
      				<div class="row">
      					<div class="col-4">
					      <input type="text" class="form-control" placeholder="Phone Number" name="phonenumber" required value="{{$patient->phonenumber}}">
      					</div>
      					<div class="col-4">
      						<input type="email" class="form-control" placeholder="email" name="email" required value="{{$patient->email}}">
      					</div>
      					<div class="col-4">
      						<input type="number" class="form-control" placeholder="ID number" name="idnumber" required value="{{$patient->id_number}}">
      					</div>
      				</div>
      				<br>
      				<br>
      				<div class="row">
      					<div class="col-4">
					      <input type="text" class="form-control" placeholder="county of residence" name="county" required value="{{$patient->county}}">
      					</div>
      					<div class="col-4">
      						<input type="text" class="form-control" placeholder="Sub county" name="subcounty" required value="{{$patient->subcounty}}">
      					</div>
      					<div class="col-4">
      						<input type="text" class="form-control" placeholder="Location" name="location" required value="{{$patient->location}}">
      					</div>
      				</div>
      				<br>
      				<br>
      				<div class="row">
      					<div class="col-4">
					      <input type="text" class="form-control" placeholder="village of residence" name="village" required value="{{$patient->village}}">
      					</div>
      					<div class="col-4">
      						<input type="date" class="form-control" placeholder="dob" name="dob" required value="{{$patient->dob}}">
      						<small class="text-danger">Enter d.o.b</small>
      					</div>
      					<div class="col-4">
                  <select name="gender" class="form-control">
                    <option disabled>select gender</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
      						
      					</div>
      				</div>

      				<p><b>Guardian details</b></p><hr>
      				<div class="row">
      					<div class="col-4">
					      <input type="text" class="form-control" placeholder="guardian name" name="gname" required value="{{$patient->gurd_name}}">
      					</div>
      					<div class="col-4">
      						<input type="text" class="form-control" placeholder="gurdian phone" name="gphone" required value="{{$patient->gurd_number}}">
      						
      					</div>
      					<div class="col-4">
      						<input type="text" class="form-control" placeholder="alternative phone" name="galternative_phone" required value="{{$patient->gurd_alt_phone}}">
      					</div>
      				</div>
      				<br>
      				<p><b>Locator description details</b></p><hr>
      				<div class="row">
      					<div class="col-12">
					      <textarea name="locator" class="form-control" rows="5" cols="5">{{$patient->locator_details}}</textarea>
      					</div>
      				
      				</div><br>
      				<div class="row">
      					<div class="col-12">
					      <button type="submit" class="btn btn-primary float-right">Update details</button>
      					</div>
      				
      				</div>
      			</form>
      		</div>
      	</div>
      </div>
  </section>
 @endsection