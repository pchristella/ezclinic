 @extends('layouts.app')
@section('content')

<div class="panel panel-default">

    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                    <div class="left-sidebar">
                    <form class="form-inline my-2 my-lg-0" method="get" action="{{ url('checker') }}">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>

                    </div>
                </div>

                <div class="col-md-9">
                    <div class="table-responsive">
                        @foreach($symptoms as $symptom)
                            <div class="col-md-4" id="checker">
                                <h4><strong>{{ $symptom->disease }}</strong></h4>
                                <p>{{ $symptom->symptom }}</p>
                                <p>{{ $symptom->type }}</p>
                                <br><br>
                            </div>

                         @endforeach
                    <div style="clear: both;"></div>
                </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{ asset('js/warning.js') }}"></script>
@endsection
