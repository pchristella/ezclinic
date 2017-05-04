@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Set Availability</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal" action="{{ action('AvailabilitiesController@store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Date</label>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="date" value="{{ old('date') }}">
                            @if($errors->has('date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('starttime') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Start Time</label>
                        <div class="col-md-8">
                            <input type="time" class="form-control" name="starttime" placeholder="Select your time" value="{{ old('starttime') }}">
                            @if($errors->has('starttime'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('starttime') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('endtime') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">End Time</label>
                        <div class="col-md-8">
                            <input type="time" class="form-control" name="endtime" placeholder="Select your time" value="{{ old('endtime') }}">
                            @if($errors->has('endtime'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('endtime') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <label class="col-md-2 control-label">Status</label>
                    <div class="form-group">
                    <input name="status" type="radio" value=Available>Available
                    <input name="status" type="radio" value="Unavailable">Unavailable
                  </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{ action('AvailabilitiesController@index') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
