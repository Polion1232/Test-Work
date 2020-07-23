<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Test Work</title>
        <style>
            .row.justify-content-center
            {
                margin:5%;
                padding: 10px;
            }
            .panel-body
            {
                text-align:center;
                padding: 5px;
                line-height: 1.5;
            }
            .panel-heading
            {
                font-weight: bold;
                font-size: x-large;
            }
  </style>
        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>
        </div>

        @yield('content')
    </body>
</html>
