@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Announcement</h2>

    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                  
                        
                 
                      {{--   @foreach($announcement as $announcement) --}}
                        
                            <div class="col-md-4" id="catalog">

                                
                               {{--  <p><img src="{{ asset($announcement->gambar) }}" style="width:200px"></p> --}}
                                <h4><strong>{{ $announcement->title }}</strong></h4>
                                <p> {{ $announcement->content }}</p>
                                
                                <br><br>
                            </div>

                         
                      {{--    @endforeach --}}
                                
                </div>
      </div>
  </div>
</div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
