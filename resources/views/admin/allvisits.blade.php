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
              <li class="breadcrumb-item active">All Visits</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <hr style="border: solid 2px #000;">
     <section class="content">
      <div class="container-fluid">
      	<div class="card">
      		<div class="card-header"><b>All Patient Visists</b></div>
      		<div class="card-body">
      			<table class="table table-striped table-bordered table-condensed" id="allVisits">
      				<thead>
      					<tr>
      						<th>#</th>
      						<th>Visit Date</th>
      						<th>Visit Type</th>
      						<th>Who came</th>
      						<th>Next Appointment Date</th>
      						<th> Status</th>
                  <th> No of days</th>
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
                        @if (strtotime($visit->tca) < strtotime(now()))
                        <span class="badge bg-danger">Missed</span>
                        @else
                        <span class="badge bg-warning">Upcoming</span>
                        @endif        
                      </td>
                      <td>
                        @php
                          $tcaDate = \Carbon\Carbon::parse($visit->tca);
                          $differenceInDays = now()->diffInDays($tcaDate);
                      @endphp
                      <span class="badge bg-info">{{$differenceInDays}} days</span>
                      </td>
                      <td>
                        @if (strtotime($visit->tca) < strtotime(now()) & $differenceInDays>=7 )
                        <span class="badge bg-danger">Due for Tracing</span>
                        @else
                        <span class="badge bg-danger">To be monitored</span>
                        @endif
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
        $('#allVisits').DataTable();
    });
  </script>
  @endpush
 @endsection

