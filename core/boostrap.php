<?php

require 'core/Router.php';
$config = require 'config.php';
require 'core/database/connection.php';
require 'core/database/QueryBuilder.php';




// $pdo = Connection::make();
// // $pdo = connectDB();


// instantiating QueryBuilder
$query = new QueryBuilder(
    Connection::make($config['database'])
);