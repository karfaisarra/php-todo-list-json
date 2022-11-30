<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP ToDo List JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="app">
        <div class="container">
            <h1 class="text-center text-secondary">Todo List</h1>
            <div class="d-flex flex-column align-items-center">
                <ul class="list-group list-group-flush ">
                    <li class="list-group-item" v-for="task in listTasks">{{task}}</li>
                </ul>
                <div class="">
                    <input type="text" name="addTask" v-model="task" @keyup.enter="addTask">
                    <button type="submit" class="btn btn-dark" @click="addTask">Add Task</button>
                </div>


            </div>
        </div>

    </div>

    <!--CDN-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="app.js"></script>
</body>

</html>