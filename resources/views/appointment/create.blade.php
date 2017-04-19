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

                    <div class="form-group{{ $errors->has('app_date') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Date</label>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="app_date" placeholder="Select your date" value="{{ old('app_date') }}">
                            @if($errors->has('app_date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('app_date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('app_time') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Date</label>
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
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
