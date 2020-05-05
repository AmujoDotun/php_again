<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
// $config = require 'config.php'; 
require 'core/database/connection.php';
require 'core/database/QueryBuilder.php';




// $pdo = Connection::make();
// // $pdo = connectDB();


// instantiating QueryBuilder
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);