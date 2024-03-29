@extends('layouts.app')

@section('content')

<div class="container">
  <h2>List of Students</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Matric No</th>
        <th>College</th>
        <th>Phone No</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $row)
          <tr>
              <td>{{$row->name}}</td>
              <td>{{$row->matricno}}</td>
              <td>{{$row->colladd}}</td>
              <td>{{$row->tel}}</td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
