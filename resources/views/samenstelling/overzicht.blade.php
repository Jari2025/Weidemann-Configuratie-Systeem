@extends('layouts.samenstelling')

@section('title', 'Jouw samenstelling')

@section('content')
    <ol class="mt-8 flex gap-6 text-sm text-weidemann-grijs">
        <li>✓ Machine</li>
        <li>✓ Aanbouwdelen</li>
        <li class="font-bold text-weidemann-zwart">Overzicht</li>
    </ol>

    <h1 class="my-6 text-3xl font-extrabold">Jouw samenstelling</h1>

    <div class="mb-16 flex flex-col gap-10 md:flex-row">
        <div class="flex-1">
            @if ($machine->afbeelding)
                <img src="{{ asset($machine->afbeelding) }}" alt="{{ $machine->naam }}" class="h-[340px] w-full border border-weidemann-lijn bg-weidemann-achtergrond object-contain">
            @else
                <div class="flex h-[340px] w-full items-center justify-center border border-weidemann-lijn bg-weidemann-achtergrond text-weidemann-grijs">Afbeelding machine</div>
            @endif

            <p class="mt-3 mb-1 text-sm text-weidemann-grijs">{{ $machine->type }}</p>
            <p class="text-xl font-extrabold">{{ $machine->naam }}</p>
        </div>

        <div class="flex-1">
            <h2 class="mb-4 text-lg font-bold">Gekozen opties</h2>

            <table class="mb-4 w-full border-collapse">
                <tr class="border-b border-weidemann-lijn">
                    <td class="py-3">{{ $machine->naam }}</td>
                    <td class="py-3 text-right">&euro; {{ number_format($machine->prijs, 2, ',', '.') }}</td>
                </tr>

                @foreach ($opties as $optie)
                    <tr class="border-b border-weidemann-lijn">
                        <td class="py-3"><span class="text-weidemann-grijs">{{ $optie->categorie }}:</span> {{ $optie->naam }}</td>
                        <td class="py-3 text-right">&euro; {{ number_format($optie->prijs, 2, ',', '.') }}</td>
                    </tr>
                @endforeach

                <tr class="text-lg font-extrabold">
                    <td class="py-3">Totaal excl. btw</td>
                    <td class="py-3 text-right">&euro; {{ number_format($totaal, 2, ',', '.') }}</td>
                </tr>
            </table>

            <a href="#" class="font-semibold text-weidemann-rood underline">Opties aanpassen</a>

            <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                <a href="#" class="bg-weidemann-rood px-5 py-3 text-center font-semibold text-white hover:bg-weidemann-rood-donker">Offerte aanvragen</a>
                <a href="#" class="border border-weidemann-zwart px-5 py-3 text-center font-semibold hover:bg-weidemann-achtergrond">Samenstelling opslaan</a>
            </div>

            <p class="mt-3 text-sm text-weidemann-grijs">Nog niet klaar? Sla je samenstelling op. Je krijgt een link per e-mail, een account is niet nodig.</p>
        </div>
    </div>
@endsection
