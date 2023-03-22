<?php

$todos = [
    'creare la repo',
    'impostare il layout',
    'riempire con i contenuti',
    'debug',
    'refactor',
    'pushareeeee',
];

header('Content_Type: application/json');

echo json_encode($todos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Todo List Json</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <div id="app">
        <main class="vh-100">
            <div class="container d-flex flex-column">
                <h1 class="h1 text-center">Todo List</h1>
                <div class="card col-6 mx-auto d-flex flex-column">
                    
                </div>

                <div class="col-6 mx-auto mb-3 row">
                    <div class="col-10">
                        <input type="text" class="form-control" id="inputText" placeholder="Inserisci una nuova task...">
                    </div>
                    <button class="btn btn-warning col-2">Inserisci</button>
                </div>
            </div>
        </main>
    </div>

    <script>
    const { createApp } = Vue

    createApp({
        data() {
        return {
            message: 'Hello Vue!'
        }
        }
    }).mount('#app')
    </script>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>