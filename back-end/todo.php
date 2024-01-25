<?php

    header('Content-type: application/json');
    header("Access-Control-Allow-Headers: X-Requested-With");
    header("Access-Control-Allow-Origin: http://localhost:5173");

    $todo = [
        [
            'primacosa' => 'pulire camera',
            'secondacosa' => 'pulire bagno'
        ],
        [
            'primacosa' => 'cucinare',
            'seconda cosa' => 'fare lavastoviglie'
        ]
    ];

    $jsonTodo = json_encode($todo);

    file_put_contents('todo.json',$jsonTodo);

    echo $jsonTodo;

?>