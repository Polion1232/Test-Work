<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Test Work</title>
        <style>
            .row.justify-content-center
            {
                margin:2.5% 0% 0% 5%;
                padding: 5px;
            }
            .panel-body
            {
                text-align:center;
                padding: 2.5px;
                line-height: 1.5;
            }
            .panel-heading
            {
                font-weight: bold;
                font-size: x-large;
            }
            .navbar
            {
                display: table;
                margin: 0 auto;
            }
            .nav-item
            {
                display: inline-block;
                padding:0px 5px 0px 5px;
                margin:0px 5px 0px 5px;
                border-radius: 15px;
                border: 1px solid black;
            }
            a
            {
                outline: none;
                text-decoration: none;
            }
  </style>
        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
            @if( auth()->check() )
                <div class="nav-item">
                    <div class="nav-link font-weight-bold" href="#">Hi {{ auth()->user()->name }}</div>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Log Out</a>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            @else
                <div class="nav-item">
                    <a class="nav-link" href="/login">Log In</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </div>
            @endif
            </nav>
        </div>

        @yield('content')
    </body>
</html>
