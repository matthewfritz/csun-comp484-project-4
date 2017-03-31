<!DOCTYPE HTML>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title') | {{ config('app.name') }}</title>
        <meta name="description" content="@yield('description')">

        {{-- APP STYLESHEETS --}}
        {!! HTML::style('css/app.css') !!}
        {!! HTML::style('bower_components/font-awesome/css/font-awesome.min.css') !!}

        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    @include('layouts.partials.header')
                </div>
            </div>

            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    @yield('content')

                    {{-- MODALS --}}
                    @yield('modal')
                </div>
            </div>

            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    @include('layouts.partials.footer')
                </div>
            </div>
        </div>
    </body>
</html>