<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Learning Laravel 5.8')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- Links --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel='stylesheet' href="{{ asset('css/master.css') }}">
        <script src="{{ asset('js/navbar.js') }}"></script>
    </head>
    <body>

        <div id='myNavBar' class='thisNavBar'>

            <a href="javascript:void(0)" class='closebtn' onclick="closeNav()">&times;</a>
            <a href="{{ route('basic') }}">First things first</a>
            <a href="/users">Relationships Practice</a>
            <a href="/contact">Contact Us</a>
            <a href="{{ route('factory') }}">Model Factory</a>

            <a id='welcome' href="{{ route('welcome') }}"> Welcome </a>

        </div>

        <!-- Since i want all of my content to be pushed when the navBar opens... -->
        <div id='main'>


            <div class="container-fluid">
                <nav id='topNav'></nav>

                <!-- Use any element to open the sidenav -->
                <div id='openDiv'>
                    <span id='openNav' onclick="openNav()"><img src="{{ asset("img/menu.png") }}" width=40 alt=""></span>
                </div>

                @yield('section')



            </div>

        </div>

    </body>
</html>
