<?php

$todos = [
    [
        'text' => 'creare la repo',
        'done' => false,
    ],
    [
        'text' => 'impostare il layout',
        'done' => false,
    ],
    [
        'text' => 'riempire con i contenuti',
        'done' => false,
    ],
    [
        'text' => 'debug',
        'done' => false,
    ],
    [
        'text' => 'refactor',
        'done' => false,
    ]
];

header('Content_Type: application/json');

echo json_encode($todos);

?>