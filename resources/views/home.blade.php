@extends('layouts.app')

@section('content')
<header class="header-image">
    <div class="headline">
        <div class="container">
            <h1>EzCLINIC</h1>
        </div>
    </div>
</header>

<!-- Page Content -->
<div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded" src="http://placehold.it/900x350" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">

                <h1>Title</h1>
                <p>Content</p>

                <a class="btn btn-primary btn-lg" href="{{ url('/event') }}">More Info</a>

            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                    This is a well that is a great spot for a business tagline or phone number for easy access!
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4">
                <h3>CHECK YOUR HEALTH</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="{{ url('/symptom') }}">More Info</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h3>MAKE AN APPOINTMENT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="{{ url('/appointment') }}">More Info</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>LATEST ANNOUNCEMENT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="{{ url('/announcement') }}">More Info</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
      </div>
@endsection

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
