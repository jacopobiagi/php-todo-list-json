<?php

    header('Content-type: application/json');

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