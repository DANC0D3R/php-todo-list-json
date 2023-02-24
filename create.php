<?php
    // Trasforma il file .json in una stringa
    $toDoListString = file_get_contents('todo-list.json');
    // Trasforma la stringa in un array associativo
    $toDoList = json_decode($toDoListString, true);

    // Aggiunge all'array il nuovo elemento
    $toDoList[] = [
        "toDo" => $_POST['newToDo'],
        "done" => false,
    ];

    // Trasforma l'array in una stringa
    $newToDoList = json_encode($toDoList);

    // Sovrascrive il file todo-list.json con la nuova lista
    file_put_contents('todo-list.json', $newToDoList);

    // Manda una risposta di successo specificando il formato .json
    $response = [
        'success' => true,
        'message' => 'Ok',
        'code' => 200,
    ];

    header('Content-Type: application/json');
    echo json_encode($response); 