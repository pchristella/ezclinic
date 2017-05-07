@extends('layouts.app')

@section('content')

<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">

			<li>You are here: <a href="{{ url('/appointment') }}">Appointment</a></li>
			<li class="active"><a href="{{ url('/appointment/list') }}">Appointment List</a></li>
					
		</ol>
	</div>
</div>


<td><a href ="{{ url('/appointment/create') }}" class="btn btn-info pull-center"
                    role="button">Book an appointment</a></td>
<div class="row">
	<div class="col-lg-12">
		@if($appointments->count() > 0)
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Package</th>
					<th>Date</th>
					<th>Time</th>
					
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php $i = 1;?>
			@foreach($appointments as $appointment)
				<tr>
					<th scope="row">{{ $i++ }}</th>
					<td><a href="{{ url('appointment/' . $appointment->id) }}">{{ $appointment->app_type }}</a></td>
					{{-- <td>{{ $appointment->nama }}</td> --}}
					<td>{{ date("g:ia\, jS M Y", strtotime($appointment->app_time)) }}</td>
					{{-- <td>{{date("g:ia\, jS M Y", strtotime($appointment->masaAkhir)) }}</td> --}}
					<td>
						<a class="btn btn-primary btn-xs" href="{{ url('appointments/' . $appointment->id . '/edit')}}">
							<span class="glyphicon glyphicon-edit"></span> Edit</a> 
						<form action="{{ url('appointment/' . $appointment->id) }}" style="display:inline" method="POST">
							<input type="hidden" name="_method" value="DELETE" />
							{{ csrf_field() }}
							<button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span> Delete</button>
						</form>
						
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		@else
			<h2>No event yet!</h2>
			
		@endif
	</div>
</div>
@endsection
