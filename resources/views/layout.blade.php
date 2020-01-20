<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project Tracker App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Julius+Sans+One|Source+Sans+Pro&display=swap" rel="stylesheet">
         <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        

    </head>
    <body>

        <header class="navbar">
            <div class="u-container">
                <h1 class="navbar__logo">Project Tracker</h1>

                <nav class="navbar__nav">
                    <a href="{{route('project.index')}}">Projects</a>
                    @include('project.assign')
                </nav>
            </div>
        </header>

    <div class="u-container">
        <div class="u-page-container">

            <div class="dashboard__control">
                <h1 class="dashboard__header">
                    @yield('dashboard-header')
                </h1>

                <div class="dashboard__control__buttons">
                    @yield('dashboard-buttons')
                </div>
            </div>
             <div class="dashboard">
                @yield('dashboard-content')
            </div>
        </div>
    </div>
    </body>
</html>
