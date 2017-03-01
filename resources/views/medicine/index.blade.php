@include('modal.destroy-modal')
@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Posts<a href="{{ url('/medicine/create') }}" class="btn btn-info pull-right" role="button">Key In New Medicine</a></h2>

    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th width="65%">Content</th>
                                <th width="15%">By</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody pull-{right}>
                            <?php $i = 0 ?>
                            @forelse($medicines as $medicine)
                                <tr>
                                    <td >{{ $medicines->firstItem() + $i }}</td>
                                    <td>{{ $medicine->desc }}</td>
                                    <td>{{ $medicine->user->name }}</td>
                                    <td>
                                    @if( $medicine->user_id == Auth::user()->id)
                                        <a href="{{ action('MedicinesController@edit',   $medicine->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ action('MedicinesController@destroy',    $medicine->id) }}" class="btn btn-danger btn-sm" id="confirm-modal">Delete</a>
                                    @endif
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            @empty
                            <tr>
                                <td colspan="6">Looks like there is no post available.</td>
                            </tr>

                            @endforelse
                        </tbody>
                      </table>
                  {{ $medicines->links() }}
              </div>
          </div>
      </div>
  </div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
