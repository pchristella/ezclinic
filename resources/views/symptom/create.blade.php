@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>New Disease</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
                <form class="form-horizontal" action="{{ action('SymptomsController@store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('disease') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Disease</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="disease" placeholder="Enter disease name" rows="1"
                                      value="{{ old('disease') }}" maxlength="500"></textarea>
                            <p class="text-muted">Maxmimum character is 500</p>
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
                        <textarea class="form-control" name="symptom" placeholder="Disease's symptoms" rows="4"
                                  value="{{ old('symptom') }}" maxlength="500"></textarea>
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
                      <textarea class="form-control" name="type" placeholder="disease's type" rows="1"
                                value="{{ old('type') }}" maxlength="500"></textarea>
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
