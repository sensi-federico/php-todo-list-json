<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="app">
        <h1 class="text-center pt-5">To do</h1>
        <div class="container d-flex justify-content-center pt-4">
            <div class="center">
                <h5 class="text-white">Write your task list</h5>
                <input type="text" v-model="newTask" @keyup.enter="addTask" placeholder="Add a new task!">
                <button class="btn btn-primary ms-3 p-1 mb-2" @click="addTask">Insert</button>
                <div class="tasks" v-if="tasks">
                    <ul class="list-group list-flush mt-3">
                        <li v-for="(task, i) in tasks" class="d-flex justify-content-between list-group-item my-1" :class="{'text-decoration-line-through': task.done}">
                            <span @click.stop="task.done = !task.done">
                                {{ task.title }}
                            </span>
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash" @click.stop="deleteTask(i)"></i></button>
                        </li>
                    </ul>
                </div>
                <div v-else>
                    <p class="lead">No tasks</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js" integrity="sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./app.js"></script>
</body>

</html>