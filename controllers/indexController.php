<?php


// calling selectAll method in the QueryBuilder
$classTask = $app['database']->selectAll('todos');
$users = $app['database']->selectAll('users');


require 'views/index-view.php';