<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white font-sans text-weidemann-zwart">
    <header class="border-b border-weidemann-lijn">
        <div class="mx-auto flex max-w-6xl flex-wrap items-center gap-8 px-8 py-4">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/weidemann-logo.png') }}" alt="Weidemann" class="h-10 w-auto">
            </a>

            <nav class="flex-1">
                <ul class="flex flex-wrap gap-6">
                    <li class="group relative">
                        <button type="button" class="py-2 hover:text-weidemann-rood">Machines</button>
                        <ul class="absolute top-full -left-4 z-10 hidden min-w-56 border border-weidemann-lijn bg-white py-2 group-hover:block group-focus-within:block">
                            <li><a href="https://weidemann.nl/machines/hoftracs" class="block px-4 py-2 hover:bg-weidemann-achtergrond hover:text-weidemann-rood">Hoftracs</a></li>
                            <li><a href="https://weidemann.nl/machines/telescooplader" class="block px-4 py-2 hover:bg-weidemann-achtergrond hover:text-weidemann-rood">Telescooplader</a></li>
                            <li><a href="https://weidemann.nl/machines/wielladers" class="block px-4 py-2 hover:bg-weidemann-achtergrond hover:text-weidemann-rood">Wielladers</a></li>
                            <li><a href="https://weidemann.nl/machines/verreikers" class="block px-4 py-2 hover:bg-weidemann-achtergrond hover:text-weidemann-rood">Verreikers</a></li>
                            <li><a href="https://weidemann.nl/aanbouwdelen" class="block px-4 py-2 hover:bg-weidemann-achtergrond hover:text-weidemann-rood">Aanbouwdelen</a></li>
                        </ul>
                    </li>
                    <li class="group relative">
                        <button type="button" class="py-2 hover:text-weidemann-rood">Oplossingen</button>
                        <ul class="absolute top-full -left-4 z-10 hidden min-w-56 border border-weidemann-lijn bg-white py-2 group-hover:block group-focus-within:block">
                            <li><a href="https://weidemann.nl/oplossingen/melkveehouderij" class="block px-4 py-2 hover:bg-weidemann-achtergrond hover:text-weidemann-rood">Melkveehouderij</a></li>
                            <li><a href="https://weidemann.nl/oplossingen/vleesveehouderij" class="block px-4 py-2 hover:bg-weidemann-achtergrond hover:text-weidemann-rood">Vleesveehouderij</a></li>
                            <li><a href="https://weidemann.nl/oplossingen/tuinbouw" class="block px-4 py-2 hover:bg-weidemann-achtergrond hover:text-weidemann-rood">Tuinbouw</a></li>
                            <li><a href="https://weidemann.nl/oplossingen/industrie" class="block px-4 py-2 hover:bg-weidemann-achtergrond hover:text-weidemann-rood">Grondverzet en erf</a></li>
                        </ul>
                    </li>
                    <li><a href="https://weidemann.nl/elektrisch" class="block py-2 hover:text-weidemann-rood">Elektrisch</a></li>
                    <li><a href="https://weidemann.nl/over-ons" class="block py-2 hover:text-weidemann-rood">Over ons</a></li>
                    <li><a href="https://weidemann.nl/service-en-support" class="block py-2 hover:text-weidemann-rood">Service</a></li>
                </ul>
            </nav>

            <a href="https://weidemann.nl/offerte-aanvragen" class="bg-weidemann-rood px-5 py-3 font-semibold text-white hover:bg-weidemann-rood-donker">Offerte aanvragen</a>
        </div>
    </header>

    <main class="mx-auto max-w-6xl px-8">
        @yield('content')
    </main>

    <footer class="border-t border-weidemann-lijn py-4 text-sm text-weidemann-grijs">
        <div class="mx-auto max-w-6xl px-8">
            <p>© 2026 Weidemann</p>
        </div>
    </footer>
</body>
</html>
