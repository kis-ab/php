<?php
const NAMES = [
    'Tema', 'Misha', 'Lena', 'Dina', 'Igor'
];

function createUser()
{

    return [
        'name' => NAMES[array_rand(NAMES)],
        'age' => mt_rand(18, 45)
    ];
}
