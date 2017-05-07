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

                     <label class="col-md-2 control-label">Type</label>
                      <div class="form-group">
                        <select name="app_type">
                          <option value="checkup">Mouth and Teeth Check Up</option>
                          <option value="scaling">Scaling</option>
                          <option value="patching">Teeth Patching</option>
                          <option value="treatment">Root Treatment</option>
                          <option value="extraction">Tooth Extraction</option>
                          <option value="dentur">Dentur</option>
                          <option value="surgery">Small Surgery</option>
                        </select>
                      </div>
{{-- 

                    <div class="form-group{{ $errors->has('app_date') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Date</label>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="app_date">{{ $availabilty->app_date }}"<
                            @if($errors->has('app_date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('app_date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div> --}}

                    <div class="form-group{{ $errors->has('app_time') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Time</label>
                        <div class="col-md-8">
                            <input type="time" class="form-control" name="app_time" placeholder="Select your time" value="{{ old('app_time') }}">
                            @if($errors->has('app_time'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('app_time') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{ action('AppointmentController@index') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-success">Book</button>
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
 $('input[name="app_time"]').daterangepicker({
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
