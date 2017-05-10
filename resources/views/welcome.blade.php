<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EzCLINIC SYSTEM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("/images/medical-cross-background-45.jpg");
                /*background-color: #fff;*/
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;

            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .table-responsive {
                color: #000000;
                
            }

            .table1 {
                color: #000000;
                
            }

            .t1 {
                color: #ff0000;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    EzCLINIC
                </div>

                <div class="links">
                  <a href="{{ url('/home') }}">Home</a>
                  <!-- <a href="{{ url('/login') }}">Login</a> -->
                    <a href="{{ url('http://www.medhelp.org/forums/list') }}">Forum</a>
                </div>

                <br><br>
                <h4 class="t1"><strong>!! ANNOUNCEMENT !!</strong></h4>

                <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table1" border="1"  cellpadding="5" cellspacing="5" width="500">
                        {{-- @foreach ($announcements as $announcement) --}}
                        <thead>
                            <tr>
                                
                                <th>Title</th>
                                <th>Content</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            
                            {{-- <td>{{ $announcement->title }}</td>
                            <td>{{ $announcement->content }}</td> --}}
                        </tr>
                        </tbody>
                        {{-- @endforeach --}}
                    </table>                    
                </div>
                </div>

               {{--  @foreach ($announcements as $a)
                @include('announcement.index', array('announcement' => $a))
                @endforeach --}}
            </div>
        </div>
    </body>
</html>
