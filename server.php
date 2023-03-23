<?php

$todos_text = file_get_contents('./todos.json');
$todos = json_decode($todos_text, true);

// $todos = [
//     [
//         'text' => 'creare la repo',
//         'done' => true,
//     ],
//     [
//         'text' => 'impostare il layout',
//         'done' => false,
//     ],
//     [
//         'text' => 'riempire con i contenuti',
//         'done' => false,
//     ],
//     [
//         'text' => 'debug',
//         'done' => false,
//     ],
//     [
//         'text' => 'refactor',
//         'done' => false,
//     ]
// ];

// $todos_json = json_encode($todos);

// file_put_contents('./todos.json', $todos_json);

$new_todo_text = isset($_POST['newTodoText']) ? $_POST['newTodoText'] : null;

if($new_todo_text) {

    $new_todo = [
        'text' => $new_todo_text,
        'done' => false
    ];

    $todos[] = $new_todo;

    $todos_json = json_encode($todos);

    file_put_contents('./todos.json', $todos_json);
}

header('Content-Type: application/json');

echo json_encode($todos);

?>