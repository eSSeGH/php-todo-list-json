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
        'done' => true,
    ],
    [
        'text' => 'refactor',
        'done' => true,
    ]
];

$todos_json = json_encode($todos);

file_put_contents('./todos.json', $todos_json);

?>