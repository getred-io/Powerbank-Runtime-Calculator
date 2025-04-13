<?php
// English language file
$translations = [
    'title' => 'Powerbank Runtime Calculator',
    'labels' => [
        'capacity' => 'Powerbank Capacity (mAh):',
        'voltage' => 'Powerbank Output Voltage (V):',
        'power' => 'Device Power (Watts):',
        'efficiency' => 'Powerbank Efficiency (%):'
    ],
    'placeholders' => [
        'capacity' => 'e.g. 10000',
        'voltage' => 'e.g. 5',
        'power' => 'e.g. 5',
        'efficiency' => 'e.g. 85'
    ],
    'calculateButton' => 'Calculate',
    'resultHeading' => 'Result:',
    'infoHeading' => 'Calculation Notes:',
    'resultTexts' => [
        'runtime' => 'With a {capacity} mAh powerbank, you can power a {power} Watt device for approximately {hours} hours and {minutes} minutes.',
        'totalHours' => 'This equals about {hours} hours.',
        'energyContent' => 'The usable energy content of your powerbank is approximately {energy} Watt-hours (Wh).'
    ],
    'infoItems' => [
        'The actual runtime may vary due to different factors (temperature, age of the powerbank).',
        'Standard USB ports usually output 5V, while the internal voltage of lithium batteries is about 3.7V.',
        'The efficiency of a powerbank typically ranges between 80% and 90%.'
    ],
    'errorMessage' => 'Please enter valid numbers.'
];
?>