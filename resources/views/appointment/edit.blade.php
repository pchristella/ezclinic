@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Edit</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
              <form class="form-horizontal" action="{{ action('AppointmentController@update', $appointment->id) }}" method="POST" enctype="multipart/form-data">
                 {{ csrf_field() }}
                 {{ method_field('PATCH') }}
                 <div class="form-group{{ $errors->has('app_type') ? ' has-error' : '' }}">
                     <label class="col-md-2 control-label">Appointment Package</label>
                     <div class="col-md-8">
                            <textarea class="form-control" name="app_type" rows="6" maxlength="500">{{ $appointment->app_type }}</textarea>
                            <p class="text-muted">Maxmimum character is 500</p>
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
                            <input type="date" class="form-control" name="app_date">{{ $appointment->app_date }}
                            @if($errors->has('app_date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('app_date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('app_time') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Time</label>
                        <div class="col-md-8">
                            <input type="time" class="form-control" name="app_time">{{ $appointment->app_time }}
                            @if($errors->has('app_time'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('app_time') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{ action('SymptomsController@index') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
