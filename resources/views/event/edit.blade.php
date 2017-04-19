@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Edit Event</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
              <form class="form-horizontal" action="{{ action('EventsController@update', $event->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Title</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="title" rows="6" maxlength="500">{{ $event->title }}</textarea>
                            <p class="text-muted">Maxmimum character is 500</p>
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
                            <textarea class="form-control" name="content" rows="6" maxlength="500">{{ $event->content }}</textarea>
                            <p class="text-muted">Maxmimum character is 500</p>
                            @if($errors->has('content'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('eventdate') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Date</label>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="eventdate" rows="6" maxlength="500">{{ $event->eventdate }}
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
                            <input type="time" class="form-control" name="eventtime" rows="6" maxlength="500">{{ $event->eventtime }}
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
