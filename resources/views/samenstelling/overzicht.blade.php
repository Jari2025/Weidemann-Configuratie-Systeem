@extends('layouts.samenstelling')

@section('title', 'Jouw samenstelling')

@section('content')
    <ol class="stappen">
        <li class="klaar">Machine</li>
        <li class="klaar">Aanbouwdelen</li>
        <li class="actief">Overzicht</li>
    </ol>

    <h1>Jouw samenstelling</h1>

    <div class="twee-kolommen">
        <div class="machine">
            @if ($machine->afbeelding)
                <img src="{{ asset($machine->afbeelding) }}" alt="{{ $machine->naam }}">
            @else
                <div class="afbeelding-leeg">Afbeelding machine</div>
            @endif

            <p class="machine-type">{{ $machine->type }}</p>
            <p class="machine-naam">{{ $machine->naam }}</p>
        </div>

        <div class="samenvatting">
            <h2>Gekozen opties</h2>

            <table class="opties">
                <tr>
                    <td>{{ $machine->naam }}</td>
                    <td class="prijs">&euro; {{ number_format($machine->prijs, 2, ',', '.') }}</td>
                </tr>

                @foreach ($opties as $optie)
                    <tr>
                        <td><span class="categorie">{{ $optie->categorie }}:</span> {{ $optie->naam }}</td>
                        <td class="prijs">&euro; {{ number_format($optie->prijs, 2, ',', '.') }}</td>
                    </tr>
                @endforeach

                <tr class="totaal">
                    <td>Totaal excl. btw</td>
                    <td class="prijs">&euro; {{ number_format($totaal, 2, ',', '.') }}</td>
                </tr>
            </table>

            <a href="#" class="link">Opties aanpassen</a>

            <div class="knoppen">
                <a href="#" class="knop">Offerte aanvragen</a>
                <a href="#" class="knop knop-wit">Samenstelling opslaan</a>
            </div>

            <p class="uitleg">Nog niet klaar? Sla je samenstelling op. Je krijgt een link per e-mail, een account is niet nodig.</p>
        </div>
    </div>
@endsection

