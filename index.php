<?php

    $pass = $_GET;

    // var_dump($pass);


    foreach ($pass as $key => $value) {
        // echo $value;
    }

    if ($value == 'boolean') {
        echo "<h1 style=color:green>OK</h1>";
    } else {
        echo "<h1 style=color:red>NO</h1>";
    }



 ?>
