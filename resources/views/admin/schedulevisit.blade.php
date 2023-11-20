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
              <li class="breadcrumb-item active">Schedule a visit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <hr style="border: solid 2px #000;">
     <section class="content">
      <div class="container-fluid">
      	<div class="card">
      		<div class="card-header">
      			<b>Schedule patient visits</b>
      		</div>
      		<div class="card-body">
      			<table class="table table-striped table-bordered table-condensed" id="VisitTable">
      				<thead>
      					<tr>
      						<th>#</th>
      						<th>First name</th>
      						<th>Last name</th>
      						<th>Patient ID</th>
      						<th>Action</th>
      					</tr>
      					<thead>
      						<tbody>
      							@foreach($patients as $patient)
      							<tr>
      								<td>{{$patient->id}}</td>
      								<td>{{$patient->firstname}}</td>
      								<td>{{$patient->lastname}}</td>
      								<td>{{$patient->patient_id}}</td>
      								<td>
      									<a href="{{route('dashboard.captureVisit',$patient->id)}}" class="btn btn-success">Capture a Vist</a>
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
        $('#VisitTable').DataTable();
    });
  </script>
  @endpush
  @endsection