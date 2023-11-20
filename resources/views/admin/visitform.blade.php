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
              <li class="breadcrumb-item active">Capture a Visit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <hr style="border: solid 2px #000;">
     <section class="content">
      <div class="container-fluid">
      	<div class="card">
      		<div class="card-header"><b>Capture a visit for patient {{$patient->firstname}} {{$patient->lastname}}</b></div>
      		<div class="card-body">
      			<form method="post" action="{{route('patient.storeVisit')}}">
      				@csrf
      				<input type="number" class="form-control" placeholder="visit date" name="pid" required value="{{$patient->id}}" hidden>
      				 <div class="form-row">
					    <div class="col">
					    	<label>Visit date</label>
					      <input type="date" class="form-control" placeholder="visit date" name="visitdate" required>
					    </div>
					    <div class="col">
					    	<label>Visit type</label>
					      <select name="visitType" class="form-control">
					      	<option disabled>select one</option>
					      	<option>Scheduled</option>
					      	<option>Unscheduled</option>
					      </select>
					    </div>
					    <div class="col">
					    	<label>Who came?</label>
					      <select name="vperson" class="form-control">
					      	<option disabled>select one</option>
					      	<option>Patient</option>
					      	<option>Treatment supporter</option>
					      </select>
					    </div>
					  </div>
					  <div class="form-row">
					  	<div class="col">
					    	<label>Reason for visit</label>
					      <textarea name="visitreason" class="form-control" rows="5" cols="4" required>
					      	
					      </textarea>
					    </div>
					  </div>
					  <div class="form-row">
					  	<div class="col">
					    	<label>Clinician name</label>
					      <input type="text" name="cname" class="form-control" required/>
					      <small>you can write the initials</small>
					    </div>
					    <div class="col">
					    	<label>Next appointment date</label>
					      <input type="date" name="appointDate" class="form-control" required/>
					    </div>
					  </div>
					  <div class="form-row">
					  	<div class="col"></div>
					  	<div class="col"></div>
					  	<div class="col">
					  		<button type="submit" class="btn btn-info float-right">Capture Visit</button>
					  	</div>
					  </div>
      			</form>
      		</div>

      	</div>
      	<div class="card">
      		<div class="card-header"><b>All {{$patient->firstname}} Visits</b></div>
      		<div class="card-body">
      			<table class="table table-striped table-bordered table-condensed" id="Visitdata">
      				<thead>
      					<tr>
      						<th>#</th>
      						<th>Visit Date</th>
      						<th>Visit Type</th>
      						<th>Who came</th>
      						<th>Next Appointment Date</th>
      						<th>Action</th>
      					</tr>
      					<thead>
      						<tbody>
      							@foreach($visits as $visit)
      							<tr>
      								<td>{{$visit->id}}</td>
      								<td>{{$visit->visitdate}}</td>
      								<td>{{$visit->visittype}}</td>
      								<td>{{$visit->vperson}}</td>
      								<td>{{$visit->tca}}</td>
      								<td>
      									<a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#example-{{$visit->id}}">Update visit</a>
      								</td>
      							</tr>
      							@include('admin.visitmodal')
      							@endforeach
      						</tbody>
      			</table>
      		</div>
      	</div>
      </div>
  </section>
  @push('pagejs')
   @include('scripts.datatable')
   @endpush
@push('js')
 <script>
    $(document).ready( function () {
        $('#Visitdata').DataTable();
    });
  </script>
  @endpush
  @endsection