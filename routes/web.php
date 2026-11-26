<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// TIJDELIJK: testdata 
// Straks komt deze data uit de database via een controller.
Route::get('/samenstelling', function () {
    $machine = (object) [
        'naam' => 'Weidemann 2060T',
        'type' => 'Telescooplader',
        'prijs' => 45000.00,
        'afbeelding' => null,
    ];

    $opties = [
        (object) ['categorie' => 'Bakken', 'naam' => 'Volumebak rond', 'prijs' => 1250.00],
        (object) ['categorie' => 'Bakken', 'naam' => 'Grondbak', 'prijs' => 1020.00],
        (object) ['categorie' => 'Vorken', 'naam' => 'Palletvork', 'prijs' => 895.00],
    ];

    $totaal = $machine->prijs;
    foreach ($opties as $optie) {
        $totaal += $optie->prijs;
    }

    return view('samenstelling.overzicht', [
        'machine' => $machine,
        'opties' => $opties,
        'totaal' => $totaal,
    ]);
})->name('samenstelling.overzicht');
