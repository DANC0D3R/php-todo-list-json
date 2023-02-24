<?php
    // Trasforma il file .json in una stringa
    $toDoListString = file_get_contents('todo-list.json');
    // trasforma la stringa in un array associativo
    $toDoList = json_decode($toDoListString, true);

    // Inserisce l'array in una risposta (che è anch'essa un array associativo)
    $response = [
        'success' => true,
        'message' => 'Ok',
        'code' => 200,
        'toDoList' => $toDoList
    ];

    // Trasforma la risposta in un file .json
    $jsonResponse = json_encode($response);

    // Trasmetta la risposta specificando il formato json
    header('Content-Type: application/json');
    echo $jsonResponse; 