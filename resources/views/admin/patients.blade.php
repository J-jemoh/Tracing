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
              <li class="breadcrumb-item active">New Patient</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <hr style="border: solid 2px #000;">
     <section class="content">
      <div class="container-fluid">
      	<div class="card">
      		<div class="card-header"><b>Add new patient</b></div>
      		<div class="card-body">
      			<form method="post" action="{{route('patient.store')}}">
              @csrf
      				<div class="row">
      					<div class="col-4">
					      <input type="number" class="form-control" placeholder="Patient ID" name="patientID" required>
      					</div>
      					<div class="col-4">
      						<input type="text" class="form-control" placeholder="First name" name="Fname" required>
      					</div>
      					<div class="col-4">
      						<input type="text" class="form-control" placeholder="Last name" name="Lname" required>
      					</div>
      				</div>
      				<br>
      				<br>
      				<div class="row">
      					<div class="col-4">
					      <input type="text" class="form-control" placeholder="Phone Number" name="phonenumber" required>
      					</div>
      					<div class="col-4">
      						<input type="email" class="form-control" placeholder="email" name="email" required>
      					</div>
      					<div class="col-4">
      						<input type="number" class="form-control" placeholder="ID number" name="idnumber" required>
      					</div>
      				</div>
      				<br>
      				<br>
      				<div class="row">
      					<div class="col-4">
					      <input type="text" class="form-control" placeholder="county of residence" name="county" required>
      					</div>
      					<div class="col-4">
      						<input type="text" class="form-control" placeholder="Sub county" name="subcounty" required>
      					</div>
      					<div class="col-4">
      						<input type="text" class="form-control" placeholder="Location" name="location" required>
      					</div>
      				</div>
      				<br>
      				<br>
      				<div class="row">
      					<div class="col-4">
					      <input type="text" class="form-control" placeholder="village of residence" name="village" required>
      					</div>
      					<div class="col-4">
      						<input type="date" class="form-control" placeholder="dob" name="dob" required>
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
					      <input type="text" class="form-control" placeholder="guardian name" name="gname" required>
      					</div>
      					<div class="col-4">
      						<input type="text" class="form-control" placeholder="gurdian phone" name="gphone" required>
      						
      					</div>
      					<div class="col-4">
      						<input type="text" class="form-control" placeholder="alternative phone" name="galternative_phone" required>
      					</div>
      				</div>
      				<br>
      				<p><b>Locator description details</b></p><hr>
      				<div class="row">
      					<div class="col-12">
					      <textarea name="locator" class="form-control" rows="5" cols="5"></textarea>
      					</div>
      				
      				</div><br>
      				<div class="row">
      					<div class="col-12">
					      <button type="submit" class="btn btn-primary float-right">Save details</button>
      					</div>
      				
      				</div>
      			</form>
      		</div>
      	</div>
      </div>
  </section>
 @endsection