@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Edit Profile</a></li>
                </ul>
                <div class="tab-content">

                  <!-- Start of first tab -->
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">

                            <form class="form-horizontal" action="{{ action ('StudentsController@update' , $student->id) }}" method="POST" enctype="multipart/form-data">

                              {{ csrf_field() }}
                              {{ method_field('PATCH') }}

                              <div class="form-group"><label class="col-sm-2 control-label">Email</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" name="email" placeholder="" value="{{ old('email', $student->user->email) }}"></input>
                                 </div>
                             </div>

                              <div class="form-group"><label class="col-sm-2 control-label">Matrik No</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" name="matricno" placeholder="" value="{{ old('matricno', $student->user->matricno) }}"></input>
                                 </div>
                             </div>



                                <div class="form-group"><label class="col-sm-2 control-label">Home Address</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="homeadd" placeholder="Home Address" value="{{ $student->homeadd }}"></input>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">College</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="colladd" placeholder="College" value="{{ $student->colladd }}">

                                        {{-- {{ <select class="form-control" name="college" value="{{ $student->colladd }}">
                                            <<option value="0" disabled selected>Choose college resident</option>
                                            <<option value="KIY">Kolej Ibrahim Yaakub</option>
                                            <<option value="KDO">Kolej Dato' Onn</option>
                                            <<option value="KAB">Kolej Aminuddin Baki</option>
                                            <<option value="KUO">Kolej Ungku Omar</option>
                                            <<option value="KBH">Kolej Burhanuddin Helmi</option>
                                            <<option value="KRK">Kolej Rahim Kajai</option>
                                            <<option value="KIZ">Kolej Ibu Zain</option>
                                            <<option value="KTSN">Kolej Tun Syed Nasir</option>
                                            <<option value="KTDI">Kolej Tun Dr. Ismail</option>
                                            <<option value="KKM">Kolej Keris Mas</option>
                                            <<option value="KTHO">Kolej Tun Hussein Onn</option>
                                            <<option value="KPZ">Kolej Pendeta Za'ba</option>
                                        </select> }} --}}
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Emergency Number</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="erno" placeholder="For Emergency" value="{{ $student->erno }}"></input>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Phone Number</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="tel" placeholder="Phone Number" value="{{ $student->tel }}"></input>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Weight</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="weight" placeholder="Weight (kg)" value="{{ $student->weight }}"></input>
                                    </div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">Height</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" name="height" placeholder="Height (cm)" value="{{ $student->height }}"></input>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                    <!-- End of first tab -->

                  </div>
                </div>
              </div>
@endsection
