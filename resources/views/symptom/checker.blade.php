@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
      
        <h2><center>Symptom Checker</center></h2>

    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <center><form method="get" action="{{ action('SymptomsController@symptom') }}">
                    <input type="text" placeholder="Symptom's Keyword" name="q" value="{{ isset($q) ? $q : '' }}"><br>
                    <div></div>
                    <input type="text" placeholder="Symptom's Keyword" name="r" value="{{ isset($r) ? $r : '' }}"><br>
                    <div></div>
                    <input type="text" placeholder="Symptom's Keyword" name="s" value="{{ isset($s) ? $s : '' }}"><br>
                    <div></div>
                      <button class="btn btn-outline-success" type="submit">Search</button>
                      </center>
                </form>
            </div>

            <div class="container">
            @if(isset($s))
     <h2>Result</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th width="10%">Disease</th>
                    <th width="55%">Symptom</th>
                    <th width="10%">Type</th>
                </tr>
                </thead>
            <tbody>
            @foreach($symptoms as $s)
            <tr>
                <td width="10%">{{$s->disease}}</td>
                <td width="55%">{{$s->symptom}}</td>
                <td width="10%">{{$s->type}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

      </div>
  </div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
