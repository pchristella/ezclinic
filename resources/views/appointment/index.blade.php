@include('modal.destroy-modal')
@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Appointment<a href="{{ url('/appointment/create') }}" class="btn btn-info pull-right" role="button">New Appointment</a></h2>

    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Appointment's Type</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody pull-{right}>
                            <?php $i = 0 ?>
                            @forelse($appointments as $appointment)
                                <tr>
                                    <td >{{ $appointments->firstItem() + $i }}</td>
                                    <td>{{ $appointment->user->name }}</td>
                                    <td>{{ $appointment->app_type }}</td>
                                    <td>{{ $appointment->app_date }}</td>
                                    <td>{{ $appointment->app_time }}</td>
                                    <td>{{ $appointment->status }}</td>
                                    <td>
                                    @if( $appointment->user_id == Auth::user()->id)
                                        <a href="{{ action('AppointmentController@edit',   $appointment->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ action('AppointmentController@destroy',    $appointment->id) }}" class="btn btn-danger btn-sm" id="confirm-modal">Delete</a>
                                    @endif
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            @empty
                            <tr>
                                <td colspan="6">Looks like there is no appointment available.</td>
                            </tr>

                            @endforelse
                        </tbody>
                      </table>
                  {{ $appointments->links() }}
              </div>
          </div>
      </div>
  </div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
