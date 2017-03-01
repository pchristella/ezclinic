@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Key In Medicine</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-10">
                <form class="form-horizontal" action="{{ action('MedicinesController@store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                        <label class="col-md-2 control-label">Medicine</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="desc" placeholder="Enter medicine name" rows="6"
                                      value="{{ old('desc') }}" maxlength="500"></textarea>
                            <p class="text-muted">Maxmimum character is 500</p>
                            @if($errors->has('desc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('desc') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{ action('MedicinesController@index') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
