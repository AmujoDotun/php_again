<?php


// calling selectAll method in the QueryBuilder
$classTask = $app['database']->selectAll('todos');


require 'views/index-view.php';