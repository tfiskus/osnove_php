<?php

$primeNumbers = array(5, 6, 8, 9, 20);

var_dump(isset($primeNumbers[3]));

echo '<br><br>';

echo "Treci clan arraya primeNumbers" . (isset($primeNumbers[2]) ? 'postoji.' : 'ne postoji.');

echo '<br><br>';

$users[] = array(
    'ime' => 'Ivan',
    'prezime' => 'Kovačević',
    'godine' => '35',
);

echo '<pre>';
print_r($users);
echo '</pre>';

$users = [
    [
        'ime' => 'Ivo',
        'prezime' => 'Ivić',
        'godine' => 19,
        'spol' => 'M'
    ],
    [
        'ime' => 'Pero',
        'prezime' => 'Perić',
        'godine' => 29,
        'spol' => 'M'
    ],
    [
        'ime' => 'Marija',
        'prezime' => 'Marijanović',
        'godine' => 30,
        'spol' => 'Ž'
    ],
    [
        'ime' => 'Petra',
        'prezime' => 'Petrić',
        'godine' => 18,
        'spol' => 'Ž'
    ]
];

echo '<pre>';
print_r($users);
echo '</pre>';

// unset($users[0]['spol']);
// unset($users[1]['spol']);

foreach ($users as $key => $user) {
    unset($users[$key]['spol']);
}
echo '<pre>';
print_r($users);
echo '</pre>';