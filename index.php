<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP ToDo List JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="app" class="text-white">
        <div class="container w-50">
            <h1 class="text-center my-5">Tasks</h1>
            <div class="add_task d-flex gap-2 mb-3">
                <input type="text" v-model="newTask" @keyup.enter="saveTask" class="form-control">
                <button @click="saveTask" class="btn btn-secondary">Add</button>
            </div>
            <div class="tasks" v-if="tasks.length">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between" v-for="(task, i) in tasks">
                        <span @click.stop="crossedOutTask(i)" :class="{'text-decoration-line-through' : task.done}">{{task.title}}</span>
                        <button class="btn btn-danger" @click.stop="cancelTask(i)">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </li>
                </ul>
            </div>
            <div v-else="">
                <p>No tasks!</p>
            </div>
        </div>
    </div>

    <!--CDN-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="app.js"></script>
</body>

</html>