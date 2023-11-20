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
              <li class="breadcrumb-item active">All Patient</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <hr style="border: solid 2px #000;">
     <section class="content">
      <div class="container-fluid">
      	<div class="card">
      		<div class="card-header"><b>All Trashed patients</b></div>
      		<div class="card-body">
      			<table class="table table-striped table-bordered table-condensed" id="patient-table">
      				<thead>
      					<tr>
      						<th>#</th>
      						<th>Patient ID</th>
      						<th>Patient name</th>
      						<th>Phone</th>
      						<th>County</th>
      						<th>Sub county</th>
      						<th>Area of residence</th>
      						<th>Action</th>
      					</tr>
      				</thead>
      				<tbody>
                @foreach($patients as $patient)
                <tr>
                  <td>{{$patient->id}}</td>
                  <td>{{$patient->patient_id}}</td>
                  <td>{{$patient->firstname}} {{$patient->lastname}}</td>
                  <td>{{$patient->phonenumber}}</td>
                  <td>{{$patient->county}}</td>
                  <td>{{$patient->subcounty}}</td>
                  <td>{{$patient->location}}</td>
                  <td> 
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a type="a" href="{{route('patient.restore',$patient->id)}}" class="btn btn-primary">Restore</a>
                      <a type="a" href="#" class="btn btn-danger">delete</a>
                    </div>
                  </td>

                </tr>
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
        $('#patient-table').DataTable();
    });
  </script>
  @endpush
 @endsection

