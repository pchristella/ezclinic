@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Set Appointment</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal" action="{{ action('AppointmentController@store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('app_type') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Appointment's Type</label>
                        <div class="col-md-8">
                          <textarea class="form-control" name="app_type" placeholder="Choose appointment's type" rows="6"
                                    value="{{ old('app_type') }}" maxlength="500"></textarea>

                            @if($errors->has('app_type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('app_type') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group @if($errors->has('app_date')) has-error @endif">
				<label for="app_date">Date</label>
				<div class="input-group">
					<input type="date" class="form-control" name="app_date" placeholder="Select your time" value="{{ old('app_date') }}">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
                    </span>
				</div>
				@if ($errors->has('app_date'))
					<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span>
					{{ $errors->first('app_date') }}
					</p>
				@endif
			</div>

      <div class="form-group @if($errors->has('app_time')) has-error @endif">
<label for="app_time">Time</label>
<div class="input-group">
<input type="time" class="form-control" name="app_time" placeholder="Select your time" value="{{ old('app_time') }}">
<span class="input-group-addon">
<span class="glyphicon glyphicon-time"></span>
      </span>
</div>
@if ($errors->has('app_time'))
<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span>
{{ $errors->first('app_time') }}
</p>
@endif
</div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{ action('AppointmentController@index') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ url('_asset/js') }}/daterangepicker.js"></script>
<script type="text/javascript">
$(function () {
	$('input[name="time"]').daterangepicker({
		"minDate": moment('<?php echo date('Y-m-d G')?>'),
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
