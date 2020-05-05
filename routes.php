<?php



// another better way of defining it
$router->get('', 'controllers/indexController.php');
$router->get('about', 'controllers/aboutController.php');
$router->get('contact-us', 'controllers/ContactUsController');
$router->get('contact-us/culture','controllers/contactsController.php');
// $router->get('names', 'controllers/formController');
$router->post('names', 'controllers/formController.php');

// var_dump($router->routes);


// old way of defining the router

// $router->define([
//     '' => 'controllers/indexController.php',
//     'about' => 'controllers/aboutController.php',
//     'contact-us' => 'controllers/ContactUsController.php',
//     'contact-us/culture' => 'controllers/contactsController.php',
//     'name' => 'controllers/formController.php'
// ]);