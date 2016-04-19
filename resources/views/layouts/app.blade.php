<!--
@Author: Daven
@Date:   2016-04-19T11:47:21-07:00
@Email:  daven1919@gmail.com
@Last modified by:   Daven
@Last modified time: 2016-04-19T13:24:21-07:00
-->



<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>

      <link rel="stylesheet" href="./css/app.css">
      <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
      <script src="./js/bootstrap.min.js"></script>
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
