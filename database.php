<?php

require 'database/connection.php';
require 'database/QueryBuilder.php';
require 'class101.php';
// require 'function.php';


$pdo = Connection::make();
// $pdo = connectDB();


// instantiating QueryBuilder
$query = new QueryBuilder($pdo);

// calling selectAll method in the QueryBuilder
$classTask = $query->selectAll('todos');








