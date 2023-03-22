<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Todo List Json</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <div id="app">
        <main class="vh-100">
            <div class="container d-flex flex-column">

                <h1 class="h1 text-center mb-5">{{title}}</h1>

                <ul class="list-group my-card col-6 mx-auto">
                    <li class="list-group-item todo d-flex" v-for="(todo, i) in todos" :key=i>
                        <span class="col-11" :class="todo.done === true ? 'done' : ''">{{todo.text}}</span>
                        <button class="my-btn">E</button>
                    </li>
                </ul>

                <div class="col-6 mx-auto my-3 row">
                    <div class="col-10 ms-0 ps-0">
                        <input v-model="newTodo.text" type="text" class="form-control" id="inputText" placeholder="Inserisci una nuova task...">
                    </div>
                    <button @click="addTodo" class="btn btn-warning col-2">Inserisci</button>
                </div>
            </div>
        </main>
    </div>

    <script>
    const { createApp } = Vue

    createApp({
        data() {
            return {
                title: 'ToDo List',
                todos:[],
                newTodo: {
                    text: '',
                    done: false,
                }
            }
        },
        methods: {
            fetchTodoList() {
                axios.get('./server.php')
                .then((res) => {
                    console.log(res.data)
                    this.todos = res.data
                    console.log(this.todos)
                })
                .catch((err) => {
                    console.log(err)
                    this.todos = []
                })

            },
            addTodo() {
                this.todos.push(this.newTodo)
            }
        },
        mounted() {
            this.fetchTodoList()
        }
    }).mount('#app')
    </script>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>