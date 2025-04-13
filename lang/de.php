<?php
// Deutsche Sprachdatei
$translations = [
    'title' => 'Powerbank Betriebsdauer Rechner',
    'labels' => [
        'capacity' => 'Powerbank Kapazität (mAh):',
        'voltage' => 'Powerbank Ausgangsspannung (V):',
        'power' => 'Geräteleistung (Watt):',
        'efficiency' => 'Effizienz der Powerbank (%):'
    ],
    'placeholders' => [
        'capacity' => 'z.B. 10000',
        'voltage' => 'z.B. 5',
        'power' => 'z.B. 5',
        'efficiency' => 'z.B. 85'
    ],
    'calculateButton' => 'Berechnen',
    'resultHeading' => 'Ergebnis:',
    'infoHeading' => 'Hinweise zur Berechnung:',
    'resultTexts' => [
        'runtime' => 'Mit einer {capacity} mAh Powerbank können Sie ein {power} Watt Gerät ungefähr {hours} Stunden und {minutes} Minuten betreiben.',
        'totalHours' => 'Das entspricht etwa {hours} Stunden.',
        'energyContent' => 'Der nutzbare Energieinhalt Ihrer Powerbank beträgt etwa {energy} Wattstunden (Wh).'
    ],
    'infoItems' => [
        'Die tatsächliche Betriebsdauer kann aufgrund verschiedener Faktoren (Temperatur, Alter der Powerbank) abweichen.',
        'Standard-USB-Anschlüsse geben meist 5V aus, während die interne Spannung von Lithium-Batterien etwa 3,7V beträgt.',
        'Die Effizienz einer Powerbank liegt typischerweise zwischen 80% und 90%.'
    ],
    'errorMessage' => 'Bitte geben Sie gültige Zahlen ein.'
];
?>