@extends('layouts.app')
@section('content')

<div class="panel panel-default">

    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
              <form method="get" action="{{ route('symptom.checker') }}">
                            <input type="text" placeholder="Symptom's Keyword" name="s">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
          </div>
      </div>
  </div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
