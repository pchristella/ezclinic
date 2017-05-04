@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>List of Available Date</h2>

    </div>
    <div class="panel-body">
        <div class="row">

            <div class="col-md-12">

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody pull-{right}>
                            <?php $i = 0 ?>
                            @forelse($availabilities as $availability)
                                <tr>

                                    <td >{{ $availabilities->firstItem() + $i }}</td>

                                    <td>{{ $availability->date }}</td>
                                    <td>{{ $availability->starttime }}</td>
                                    <td>{{ $availability->endtime }}</td>
                                    <td>{{ $availability->status }}</td>
                                    <td>
                                    {{-- @if( $availability->user_id == Auth::user()->id)
                                        <a href="{{ action('AppointmentController@create',   $availability->id) }}" class="btn btn-primary btn-sm">Details</a>
                                        
                                    @endif --}}
                                    @if( Auth::user()->role==='user')
                                        <a href="{{ action('AppointmentController@create',   $availability->id) }}" class="btn btn-primary btn-sm">Details</a>
                                    @endif
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            @empty
                            <tr>
                                <td colspan="6">Looks like there is no slot available.</td>
                            </tr>

                            @endforelse
                        </tbody>
                      </table>
                  {{ $availabilities->links() }}
              </div>
          </div>
      </div>
  </div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
