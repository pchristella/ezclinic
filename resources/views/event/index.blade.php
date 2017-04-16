@include('modal.destroy-modal')
@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Diseases<a href="{{ url('/event/create') }}" class="btn btn-info pull-right" role="button">New Event</a></h2>

    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody pull-{right}>
                            <?php $i = 0 ?>
                            @forelse($events as $event)
                                <tr>
                                    <td >{{ $events->firstItem() + $i }}</td>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->content }}</td>
                                    <td>{{ $event->eventdate }}</td>
                                    <td>{{ $event->eventtime }}</td>
                                    <td>
                                    @if( $event->user_id == Auth::user()->id)
                                        <a href="{{ action('EventsController@edit',   $event->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ action('EventsController@destroy',    $event->id) }}" class="btn btn-danger btn-sm" id="confirm-modal">Delete</a>
                                    @endif
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            @empty
                            <tr>
                                <td colspan="6">Looks like there is no event available.</td>
                            </tr>

                            @endforelse
                        </tbody>
                      </table>
                  {{ $events->links() }}
              </div>
          </div>
      </div>
  </div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
