<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/samenstelling.css') }}">
</head>
<body>
    <header class="header">
        <div class="container header-inner">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/weidemann-logo.png') }}" alt="Weidemann">
            </a>

            <nav class="menu">
                <ul>
                    <li class="dropdown">
                        <button type="button">Machines</button>
                        <ul class="submenu">
                            <li><a href="https://weidemann.nl/machines/hoftracs">Hoftracs</a></li>
                            <li><a href="https://weidemann.nl/machines/telescooplader">Telescooplader</a></li>
                            <li><a href="https://weidemann.nl/machines/wielladers">Wielladers</a></li>
                            <li><a href="https://weidemann.nl/machines/verreikers">Verreikers</a></li>
                            <li><a href="https://weidemann.nl/aanbouwdelen">Aanbouwdelen</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <button type="button">Oplossingen</button>
                        <ul class="submenu">
                            <li><a href="https://weidemann.nl/oplossingen/melkveehouderij">Melkveehouderij</a></li>
                            <li><a href="https://weidemann.nl/oplossingen/vleesveehouderij">Vleesveehouderij</a></li>
                            <li><a href="https://weidemann.nl/oplossingen/tuinbouw">Tuinbouw</a></li>
                            <li><a href="https://weidemann.nl/oplossingen/industrie">Grondverzet en erf</a></li>
                        </ul>
                    </li>
                    <li><a href="https://weidemann.nl/elektrisch">Elektrisch</a></li>
                    <li><a href="https://weidemann.nl/over-ons">Over ons</a></li>
                    <li><a href="https://weidemann.nl/service-en-support">Service</a></li>
                </ul>
            </nav>

            <a href="https://weidemann.nl/offerte-aanvragen" class="knop">Offerte aanvragen</a>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <p>© 2026 Weidemann</p>
        </div>
    </footer>
</body>
</html>
