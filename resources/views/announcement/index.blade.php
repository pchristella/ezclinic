@include('modal.destroy-modal')
@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">

 @forelse($announcements as $announcement)

    @if( $announcement->user_id == Auth::user()->id)
        <h2>Announcement<a href="{{ url('/announcement/create') }}" class="btn btn-info pull-right" role="button">New Announcement</a></h2>
        @else
        <h2>Announcement</h2>
        @endif

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
                                <th>By</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody pull-{right}>
                            <?php $i = 0 ?>
                           
                                <tr>
                                    <td >{{ $announcements->firstItem() + $i }}</td>
                                    <td>{{ $announcement->title }}</td>
                                    <td>{{ $announcement->content }}</td>

                                    <td>{{ $announcement->user->name }}</td>
                                    <td>{{ $announcement->created_at }}</td>
                                    <td>
                                    @if( $announcement->user_id == Auth::user()->id)
                                        <a href="{{ action('AnnouncementsController@edit',   $announcement->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ action('AnnouncementsController@destroy',    $announcement->id) }}" class="btn btn-danger btn-sm" id="confirm-modal">Delete</a>

                                        @else
                                         <a href="{{ action('AnnouncementsController@announce',   $announcement->id) }}" class="btn btn-primary btn-sm">Details</a>
                                    @endif
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            @empty
                            <tr>
                                <td colspan="6">Looks like there is no current announcement.</td>
                            </tr>

                            @endforelse
                        </tbody>
                      </table>
                  {{ $announcements->links() }}
              </div>
          </div>
      </div>
  </div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
