@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Edit</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
              <form class="form-horizontal" action="{{ action('SymptomsController@update', $symptom->id) }}" method="POST" enctype="multipart/form-data">
                 {{ csrf_field() }}
                 {{ method_field('PATCH') }}
                 <div class="form-group{{ $errors->has('disease') ? ' has-error' : '' }}">
                     <label class="col-md-2 control-label">Post Content</label>
                     <div class="col-md-8">
                            <textarea class="form-control" name="disease" rows="1">{{ $symptom->disease }}</textarea>
                            
                            @if($errors->has('disease'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('disease') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('symptom') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Symptom</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="symptom" rows="6" maxlength="500">{{ $symptom->symptom }}</textarea>
                            @if($errors->has('symptom'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('symptom') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Type</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="type" rows="1">{{ $symptom->type }}</textarea>
                            @if($errors->has('type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('type') }}</strong>
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
