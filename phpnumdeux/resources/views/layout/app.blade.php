<html>

    <head>
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    </head>

    <body>
        <header class="header">
            <a href="/Home" class="logo">Minecraft</a>
            <div class="nav-buttons">
                <a href="#" class="btn-login">S'identifier</a>
            </div>
        </header>
        @yield('content')
    </body>
</html>