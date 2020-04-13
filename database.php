<?php

require 'database/connection.php';
require 'database/QueryBuilder.php';
require 'class101.php';
// require 'function.php';


$pdo = Connection::make();
// $pdo = connectDB();

$query = new QueryBuilder($pdo);

$classTask = $query->selectAll('todos');








