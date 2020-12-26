<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Muftinet Basic Website</title>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('includes.navbar')

    <div class="container">
        {{-- This IF Expression will exclude the Jumbotron from any other Page --}}
        @if(Request::is('/'))
            @include('includes.showcase')
        @endif

        <div class="row">
            <div class="col-md-8 col-lg-8">
                 @include('includes.messages')
                @yield('content')
            </div>

            <div class="col-md-4 col-lg-4">
                @include('includes.sidebar')
            </div>

        </div>
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright 2020 @copy; MUFTINET</p>

    </footer>

</body>
</html>
