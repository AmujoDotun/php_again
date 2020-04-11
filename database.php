<?php

require 'database/connection.php';
require 'class101.php';
require 'function.php';


$pdo = Connection::make();
// $pdo = connectDB();


$classTask = fetchAllTask($pdo);







