@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
      <div class="col-md-12">
        <form method="get" action="{{ action('SymptomsController@symptom') }}">
                      <input type="text" placeholder="Symptom's Keyword" name="s" value="{{ isset($s) ? $s : '' }}">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
    </div>
        <!-- <h2>Diseases<a href="{{ url('/symptom/create') }}" class="btn btn-info pull-right" role="button">New Entry</a></h2> -->

    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Disease</th>
                                <th>Symptom</th>
                                <th>Type</th>
                                <!-- <th>By</th> -->
                            </tr>
                        </thead>
                        <tbody pull-{right}>
                            <?php $i = 0 ?>
                            @forelse($symptoms as $symptom)
                                <tr>
                                    <td >{{ $symptoms->firstItem() + $i }}</td>
                                    <td>{{ $symptom->disease }}</td>
                                    <td>{{ $symptom->symptom }}</td>
                                    <td>{{ $symptom->type }}</td>
                                    <!-- <td>{{ $symptom->user->name }}</td> -->
                                    <!-- <td>
                                    @if( $symptom->user_id == Auth::user()->id)
                                        <a href="{{ action('SymptomsController@edit',   $symptom->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ action('SymptomsController@destroy',    $symptom->id) }}" class="btn btn-danger btn-sm" id="confirm-modal">Delete</a>
                                    @endif
                                    </td> -->
                                </tr>
                                <?php $i++ ?>
                            @empty
                            <tr>
                                <td colspan="6">Looks like there is no symptom matched.</td>
                            </tr>

                            @endforelse
                        </tbody>
                      </table>
                  {{ $symptoms->appends(['s'=> $s])->links() }}
              </div>
          </div>
      </div>
  </div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
