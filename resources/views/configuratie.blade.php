
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
</head>

<body class="p-0 font-[Arial,sans-serif]">
    <header class="flex items-center justify-center">
        <img class="mr-[230px] w-[300px] h-auto" src="../../../images/weidemann-logo.png" alt="Weidemann Logo">
        <nav>
            <ul class="flex list-none">
                <li class="m-5">
                    <a href="#" class="text-black no-underline">
                        Machines
                        <i class="fa-solid fa-caret-down"></i>
                    </a>
                </li>
                <li class="m-5">
                    <a href="#" class="text-black no-underline">
                        Oplossingen
                        <i class="fa-solid fa-caret-down"></i>
                    </a>
                </li>
                <li class="m-5">
                    <a href="#" class="text-black no-underline">
                        Elektrisch
                    </a>
                </li>
                <li class="m-5">
                    <a href="#" class="text-black no-underline">
                        Over ons
                    </a>
                </li>
                <li class="m-5">
                    <a href="#" class="text-black no-underline">
                        Service
                    </a>
                </li>
            </ul>
        </nav>

        <div class="ml-5 cursor-pointer border border-black p-[10px] rounded-[5px]">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>

        <div class="ml-5 cursor-pointer text-xs">
            <p class="text-white bg-[#bf0000] text-xl p-3 rounded-[5px] font-bold">
                Offerte aanvragen
                <i class="fa-solid fa-angle-right"></i>
            </p>
        </div>

    </header>

    <div class="info p-8 bg-gray-100">
        <p class="text-gray-400 ml-110 mr-110">Home <i class="fa-solid fa-caret-right"></i> Offerte aanvraag</p><br>
        <h1 class="text-5xl font-bold ml-110 mr-110">Offerte aanvraag</h1><br>
        <p class="text-gray-400 ml-110 mr-110">Vul het formulier in en we nemen zo snel mogelijk contact met je op over je offerteaanvraag.</p>
    </div>
    <div class="main ml-110 mr-110">

    </div>
</body>
</html>
