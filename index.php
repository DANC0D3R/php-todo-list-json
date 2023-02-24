<?php 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Daniele Minieri">
        <title>ToDo List JSON</title>

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Stile -->
        <link rel="stylesheet" href="./css/style.css">
        <!-- Vue -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <!-- Axios -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
        <div id="app">
            <!-- Titolo -->
            <h1>ToDo List</h1>
            <!-- Lista -->
            <div class="list-box">
                <div v-for="item, index in toDoList" class="item d-flex justify-content-between" :class="{ done: item.done }" @click="doneFlag(item,index)">
                    <p>{{ item.toDo }}</p>
                    <button class="delete m-1 btn btn-square btn-danger">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
            </div>
            <!-- Sezione inserimento nuovo elemento -->
            <form class="input-box d-flex" @submit.prevent>
                <input class="ps-2 rounded" type="text" v-model="newToDo" placeholder='Inserisci elemento...'>
                <button type="submit" class="btn btn-primary add-button" @click="addToDo()">Inserisci</button>
            </form>
        </div>
        <!-- Javascript -->
        <script type="text/javascript" src="./js/script.js"></script>    
    </body>
</html>