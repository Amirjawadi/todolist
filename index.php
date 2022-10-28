<?php 
    include "./bootstrap/init.php";
    include "./lib.tasks.php";


    $folders = getfolders();
    var_dump($records);
    $tasks = gettasks();

    include "tpl/tpl-index.php";


   


