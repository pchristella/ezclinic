@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{{ Auth::user()->name}}<p class="pull-right">{{ Auth::user()->matricno }}</p></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">
                  <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive">
                  <p>Upload photo</p>
                </div>

                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      @foreach($students as $student)
                      <tr>
                        <td>Email</td>
                        <td>{{$student->user->email}}</td>
                      </tr>
                      <tr>
                        <td>Home Address</td>
                        <td>{{$student->homeadd}}</td>
                      </tr>
                             <tr>
                        <td>College Address</td>
                        <td>{{$student->colladd}}</td>
                      </tr>
                        <tr>
                        <td>Emergency Contact</td>
                        <td>{{$student->erno}}</td>
                      </tr>
                      <tr>
                        <td>Phone Number</td>
                        <td>{{$student->tel}}</td>
                      </tr>
                      <tr>
                        <td>Weight</td>
                        <td>{{$student->weight}}
                        </td>
                      </tr>
                      <tr>
                        <td>Height</td>
                        <td>{{$student->height}}</td>
                      </tr>

                    </tbody>
                  </table>

                </div>
              </div>
            </div>
                 <div class="panel-footer">
                   @if( $student->user_id == Auth::user()->id)

                            <a href="{{ action ('StudentsController@edit', $student->user_id) }}" type="button" class="btn btn-sm btn-success">EDIT</a>

                          @endif

                    </div>
</div>
          </div>
        </div>
      </div>
      @endforeach
@endsection
