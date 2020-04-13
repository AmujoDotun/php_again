<?php

require 'database/connection.php';
require 'database/QueryBuilder.php';



// $pdo = Connection::make();
// // $pdo = connectDB();


// instantiating QueryBuilder
$query = new QueryBuilder(Connection::make());