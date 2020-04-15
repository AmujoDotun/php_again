<?php



$router->define([
    '' => 'controllers/indexController.php',
    'about' => 'controllers/aboutController.php',
    'contact-us' => 'controllers/ContactUsController.php',
    'contact-us/culture' => 'controllers/contactsController.php'
]);