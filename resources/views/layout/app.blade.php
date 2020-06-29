<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NMS - Tracker</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <meta name="csrf-token" content="{{'csrf_token'}}">
        <style>
            body
            {
                padding: 20px;
            }

            .navbar
            {
                margin-bottom: 20px;
            }

           

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
