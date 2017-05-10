@extends('layouts.app1')

@section('content')

<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">
			<li>You are here: <a href="{{ url('/') }}">Home</a></li>
			<li><a href="{{ url('/appointment') }}">Events</a></li>
			{{-- <li class="active">{{ $appointment->aktiviti }}</li> --}}
		</ol>
	</div>
</div>

<div class="row">
{{-- 	<div class="col-lg-12">
		<h2>{{ $appointment->aktiviti }} <small>booked by {{ $appointment->nama }}</small></h2>
		<hr>
	</div> --}}
</div>

<div class="row">
	<div class="col-lg-6">

	@forelse ($appointments as $appointment)
		
		<p>Time: <br>
		{{ date("g:ia\, jS M Y", strtotime($appointment->app_time)) }}
		</p>
		
{{-- 		<p>Duration: <br>
		{{ $duration }}
		</p> --}}
		
		<p>
			<form action="{{ url('appointment/' . $appointment->id) }}" style="display:inline;" method="POST">
				<input type="hidden" name="_method" value="DELETE" />
				{{ csrf_field() }}
				<button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span> Delete</button>
			</form>
			<a class="btn btn-primary" href="{{ url('appointment/' . $appointment->id . '/edit')}}">
				<span class="glyphicon glyphicon-edit"></span> Edit</a> 
			
		</p>
		@endforelse
	</div>
</div>
@endsection

@section('js')
<!-- <script src="{{ url('_asset/js') }}/daterangepicker.js"></script> -->
<script type="text/javascript">
$(function () {
	$('input[name="app_time"]').daterangepicker({
		"timePicker": true,
		"timePicker24Hour": true,
		"timePickerIncrement": 15,
		"autoApply": true,
		"locale": {
			"format": "DD/MM/YYYY HH:mm:ss",
			"separator": " - ",
		}
	});
});
</script>
@endsection