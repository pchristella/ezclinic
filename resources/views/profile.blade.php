@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

@foreach($students as $row)
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{{$row->name}}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>

                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Matric Number</td>
                        <td>{{$row->matricno}}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>{{$row->email}}</td>
                      </tr>
                      <tr>
                        <td>Home Address</td>
                        <td>{{$row->homeadd}}</td>
                      </tr>
                             <tr>
                        <td>College Address</td>
                        <td>{{$row->colladd}}</td>
                      </tr>
                        <tr>
                        <td>Emergency Contact</td>
                        <td>{{$row->erno}}</td>
                      </tr>
                      <tr>
                        <td>Phone Number</td>
                        <td>{{$row->tel}}</td>
                      </tr>
                      <tr>
                        <td>Weight</td>
                        <td>{{$row->weight}}
                        </td>
                      </tr>
                      <tr>
                        <td>Height</td>
                        <td>{{$row->height}}</td>
                      </tr>

                    </tbody>
                  </table>

                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning">EDIT</a>
                          </span>
                    </div>

          </div>
        </div>
      </div>
    </div>
@endsection
