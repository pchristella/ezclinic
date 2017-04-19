@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>New Event</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal" action="{{ action('EventsController@store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Title</label>
                        <div class="col-md-8">
                          <textarea class="form-control" name="title" placeholder="Event's Title" rows="6"
                                    value="{{ old('title') }}" maxlength="500"></textarea>
                            @if($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Description</label>
                        <div class="col-md-8">
                          <textarea class="form-control" name="content" placeholder="Describe this event" rows="6"
                                    value="{{ old('content') }}" maxlength="500"></textarea>
                            @if($errors->has('content'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('eventdatendate') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Date</label>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="eventdate" placeholder="Date of the Event" value="{{ old('eventdate') }}">
                            @if($errors->has('eventdate'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('eventdate') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('eventtime') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Time</label>
                        <div class="col-md-8">
                            <input type="time" class="form-control" name="eventtime" placeholder="Select your time" value="{{ old('eventtime') }}">
                            @if($errors->has('eventtime'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('eventtime') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{ action('EventsController@index') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
