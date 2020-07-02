<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NMS - Tracker</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <meta name="csrf-token" content="{{'csrf_token'}}">
        <style>

            body { padding: 20px; }
            .navbar{ margin-bottom: 20px; }
            .margem-card { margin: 30px; }
            .row { padding: 10px; }
            h1 {padding: 10px; }
            .form-group { margin: 0px ;}

        </style>
    </head>
    <body>
        <div class="container">
            @component('component.navbar')
            @endcomponent
            <main role="main">
                @hasSection ('body')
                    @yield('body')   
                @endif
            </main>
        </div>

        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
        @hasSection ('javascript')
            @yield('javascript')
        @endif
    </body>
</html>
