
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body class="p-0">

    <header class="flex items-center justify-center sticky top-0 bg-white shadow-md p-5">

        <img class="mr-[230px] w-[300px] h-auto"
             src="../../../images/weidemann-logo.png"
             alt="Weidemann Logo">

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
                    <a href="#" class="text-black no-underline">Elektrisch</a>
                </li>

                <li class="m-5">
                    <a href="#" class="text-black no-underline">Over ons</a>
                </li>

                <li class="m-5">
                    <a href="#" class="text-black no-underline">Service</a>
                </li>

            </ul>
        </nav>

        <div class="ml-5 cursor-pointer border border-black p-[10px] rounded-[5px]">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>

        <div class="ml-5 cursor-pointer">
            <p class="text-white bg-[#bf0000] text-base p-3 rounded-[5px] font-black tracking-tight">
                Offerte aanvragen
                <i class="fa-solid fa-angle-right"></i>
            </p>
        </div>

    </header>

    <div class="info p-8 bg-gray-100">

        <p class="text-gray-400 ml-110 mr-110">
            Home <i class="fa-solid fa-caret-right"></i> Offerte aanvraag
        </p>

        <br>

        <h1 class="text-5xl ml-110 mr-110 font-bold">
            Offerte aanvraag
        </h1>

        <br>

        <p class="text-gray-400 ml-110 mr-110">
            Vul het formulier in en we nemen zo snel mogelijk contact met je op over je offerteaanvraag.
        </p>

    </div>

    <div class="configuratie ml-110 mr-110 mt-10">

        <h1 class="text-2xl font-bold font-bold">
            Jouw gegevens
        </h1>

        <br>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4 gap-y-6">

            <div>
                <p class="text-gray-700 text-base font-normal mb-2">
                    Naam
                </p>

                <input type="text" placeholder="Naam"
                    class="border border-gray-300 rounded-md text-sm p-2 w-full">
            </div>

            <div>
                <p class="text-gray-700 text-base font-normal mb-2">
                    Bedrijfsnaam
                    <span class="text-gray-400">(optioneel)</span>
                </p>

                <input type="text" placeholder="Bedrijfsnaam"
                    class="border border-gray-300 rounded-md text-sm p-2 w-full">
            </div>

            <div>
                <p class="text-gray-700 text-base font-normal mb-2">
                    E-mailadres
                </p>

                <input type="email" placeholder="E-mailadres"
                    class="border border-gray-300 rounded-md text-sm p-2 w-full">
            </div>

            <div>
                <p class="text-gray-700 text-base font-normal mb-2">
                    Telefoon
                    <span class="text-gray-400">(optioneel)</span>
                </p>

                <input type="tel" placeholder="Telefoonnummer"
                    class="border border-gray-300 rounded-md text-sm p-2 w-full">
            </div>

        </div>

        <br>

        <h1 class="text-2xl font-bold">
            Machine en wensen
        </h1>

        <br>

        <p class="text-gray-700 text-base font-normal mb-2">
            Machines
            <span class="text-gray-400">(optioneel)</span>
        </p>

        <select class="border border-gray-300 rounded-md p-2 w-185 text-sm bg-white">

            <option value="weidemann">Weidemann 2060</option>
            <option value="wacker">Weidemann 2060T</option>
            <option value="giant">Weidemann 2090 Nieuw!</option>

        </select>

        <br><br>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">

            <div class="border-2 rounded-md p-4 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <h2 class="text-xl font-bold mb-3">Bakken</h2>
                <img class="w-40 h-auto" src="../../../images/aanbouwdelen/bakken/volume-bak-rond.webp" alt="Volume Bak Rond">
                <p class="mt-3 text-sm text-gray-500">
                    Geselecteerde opties:
                </p>
            </div>

            <div class="border-2 rounded-md p-4 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <h2 class="text-xl font-bold mb-3">Schuivers</h2>
                <img class="w-40 h-auto" src="../../../images/aanbouwdelen/schuivers/voerschuif.webp" alt="Voerschuif">
                <p class="mt-3 text-sm text-gray-500">
                    Geselecteerde opties:
                </p>
            </div>

            <div class="border-2 rounded-md p-4 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <h2 class="text-xl font-bold mb-3">Maaiers</h2>
                <img class="w-40 h-auto" src="../../../images/aanbouwdelen/maaiers/klepel-maaier.webp" alt="Klepel Maaier">
                <p class="mt-3 text-sm text-gray-500">
                    Geselecteerde opties:
                </p>
            </div>

            <div class="border-2 rounded-md p-4 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <h2 class="text-xl font-bold mb-3">Grijpers</h2>
                <img class="w-40 h-auto" src="../../../images/aanbouwdelen/grijpers/krokodillenbek-klein.webp" alt="Krokodillenbek Klein">
                <p class="mt-3 text-sm text-gray-500">
                    Geselecteerde opties:
                </p>
            </div>

            <div class="border-2 rounded-md p-4 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <h2 class="text-xl font-bold mb-3">Boren</h2>
                <img class="w-40 h-auto" src="../../../images/aanbouwdelen/boren/grondboor.webp" alt="Grondboor">
                <p class="mt-3 text-sm text-gray-500">
                    Geselecteerde opties:
                </p>
            </div>

            <div class="border-2 rounded-md p-4 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <h2 class="text-xl font-bold mb-3">Bezems</h2>
                <img class="w-40 h-auto" src="../../../images/aanbouwdelen/bezems/veegmachine-type-30.webp" alt="Veegmachine Type 30">
                <p class="mt-3 text-sm text-gray-500">
                    Geselecteerde opties:
                </p>
            </div>

            <div class="border-2 rounded-md p-4 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <h2 class="text-xl font-bold mb-3">Borstels</h2>
                <img class="w-40 h-auto" src="" alt="">
                <p class="mt-3 text-sm text-gray-500">
                    Geselecteerde opties:
                </p>
            </div>

            <div class="border-2 rounded-md p-4 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <h2 class="text-xl font-bold mb-3">Diverse</h2>
                <img class="w-40 h-auto" src="../../../images/aanbouwdelen/diverse/sneeuwfrees.webp" alt="Sneeuwfrees">
                <p class="mt-3 text-sm text-gray-500">
                    Geselecteerde opties:
                </p>
            </div>

            <div class="border-2 rounded-md p-4 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <h2 class="text-xl font-bold mb-3">Klemmen</h2>
                <img class="w-40 h-auto" src="../../../images/aanbouwdelen/klemmen/rondebalen-stapelaar.webp" alt="Rondebalen Stapelaar">
                <p class="mt-3 text-sm text-gray-500">
                    Geselecteerde opties:
                </p>
            </div>

            <div class="border-2 rounded-md p-4 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <h2 class="text-xl font-bold mb-3">Strooiers</h2>
                <img class="w-40 h-auto" src="../../../images/aanbouwdelen/strooiers/instrooier.webp" alt="Instrooier">
                <p class="mt-3 text-sm text-gray-500">
                    Geselecteerde opties:
                </p>
            </div>

            <div class="border-2 rounded-md p-4 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <h2 class="text-xl font-bold mb-3">Vorken</h2>
                <img class="w-40 h-auto" src="../../../images/aanbouwdelen/vorken/palletvork.webp" alt="Palletvork">
                <p class="mt-3 text-sm text-gray-500">
                    Geselecteerde opties:
                </p>
            </div>

        </div>

        <br>
        <br>

        <h1 class="text-2xl font-bold font-bold">
            Overige opties
        </h1><br>
        <p class="text-normal  mb-3">
            Selecteer de overige opties die je graag wilt toevoegen aan je machine.
        </p>
        <form class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="border-2 rounded-md p-2 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <input type="checkbox" id="option1" name="option1" value="option1" class="mb-2">
                <label for="option1">Optie 1</label>
            </div>
            <div class="border-2 rounded-md p-2 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <input type="checkbox" id="option2" name="option2" value="option2" class="mb-2">
                <label for="option2">Optie 2</label>
            </div>
            <div class="border-2 rounded-md p-2 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <input type="checkbox" id="option3" name="option3" value="option3" class="mb-2">
                <label for="option3">Optie 3</label>
            </div>
            <div class="border-2 rounded-md p-2 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <input type="checkbox" id="option4" name="option4" value="option4" class="mb-2">
                <label for="option4">Optie 4</label>
            </div>
            <div class="border-2 rounded-md p-2 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <input type="checkbox" id="option5" name="option5" value="option5" class="mb-2">
                <label for="option5">Optie 5</label>
            </div>
            <div class="border-2 rounded-md p-2 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <input type="checkbox" id="option6" name="option6" value="option6" class="mb-2">
                <label for="option6">Optie 6</label>
            </div>
            <div class="border-2 rounded-md p-2 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <input type="checkbox" id="option7" name="option7" value="option7" class="mb-2">
                <label for="option7">Optie 7</label>
            </div>
            <div class="border-2 rounded-md p-2 border-gray-300 flex flex-col justify-start items-center text-gray-700">
                <input type="checkbox" id="option8" name="option8" value="option8" class="mb-2">
                <label for="option8">Optie 8</label>
            </div>
        </form> 

    </div>
    <footer class="border border-gray-300 p-8 mt-10 flex flex-col justify-start items-center">
        <div class="grid grid-cols-5 grid-rows-5 gap-0 ml-110 mr-110">
            <div class="[grid-area:1/1/3/2]"><img src="../../../images/weidemann-logo.png" alt="Weidemann Logo"></div>
            <div class="[grid-area:1/2/2/3] text-red-700 font-bold">Machines</div>
            <div class="[grid-area:1/4/2/5] text-red-700 font-bold">Over Weidemann</div>
            <div class="[grid-area:1/5/2/6] text-red-700 font-bold">Service & Support</div>
            <div class="[grid-area:1/3/2/4] text-red-700 font-bold">Oplossingen</div>
        
            <div class="[grid-area:2/2/3/3]">Hoftracks</div>
            <div class="[grid-area:2/3/3/4]">Melkveehouderij</div>
            <div class="[grid-area:2/4/3/5]">Over ons</div>
            <div class="[grid-area:2/5/3/6]">Service & Support</div>

            <div class="[grid-area:3/2/4/3]">Telescoopladers</div>
            <div class="[grid-area:3/3/4/4]">Vleesveehouderij</div>
            <div class="[grid-area:3/4/4/5]"></div>
            <div class="[grid-area:3/5/4/6]"></div>

            <div class="[grid-area:4/2/5/3]">Wielladers</div>
            <div class="[grid-area:4/3/5/4]">Tuinbouw / Kassen</div>
            <div class="[grid-area:4/4/5/5]"></div>
            <div class="[grid-area:4/5/5/6]"></div>

            <div class="[grid-area:5/2/6/3]">Verreikers</div>
            <div class="[grid-area:5/3/6/4]">Grondverzet en erf</div>
            <div class="[grid-area:5/4/6/5]"></div>
            <div class="[grid-area:5/5/6/6]"></div>
        </div>
    </footer>
    
</body>
</html>
