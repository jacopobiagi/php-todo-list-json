<?php

    header('Content-type: application/json');
    header("Access-Control-Allow-Headers: X-Requested-With");
    header("Access-Control-Allow-Origin: http://localhost:5173");

    $todo = [
        [
            'tips' => 'pulire camera'
        ],
        [
            'tips' => 'Spazzare sala'
        ],
        [
            'tips' => 'pulire bagno'
        ],
        [
            'tips' => 'pulire macchina'
        ]

    ];

    $jsonTodo = json_encode($todo);

    file_put_contents('todo.json',$jsonTodo);

    echo $jsonTodo;

?>