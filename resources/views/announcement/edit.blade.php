@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Edit</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
              <form class="form-horizontal" action="{{ action('AnnouncementsController@update', $announcement->id) }}" method="POST" enctype="multipart/form-data">
                 {{ csrf_field() }}
                 {{ method_field('PATCH') }}
                 <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                     <label class="col-md-2 control-label">Title</label>
                     <div class="col-md-8">
                            <textarea class="form-control" name="title" rows="1" maxlength="200">{{ $announcement->title }}</textarea>
                            <p class="text-muted">Maxmimum character is 200</p>
                            @if($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Content</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="content" rows="1" maxlength="500">{{ $announcement->content }}</textarea>
                            @if($errors->has('content'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{ action('AnnouncementsController@index') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
