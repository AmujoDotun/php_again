<!DOCTYPE html>
<html lang="en">
<head>
<?php
require 'views/dump/second.php';
require 'views/dump/array.php';
require 'views/dump/assoArray.php';
// require 'class101.php';
 ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <style>
    header {
            background: #e3e3e3;
            padding:2em;
            text-align: center;
        }
  </style>
</head>
<body>

        <nav>
            <ul>
                <li><a href="/about">About-Us</a></li>
                <li><a href="/contact-us">Contact-Us</a></li>
            </ul>
        </nav>
    <header>
    
        
        <h1><?= $greeting ?></h1>
    </header>

        <div class="class101_asset">
            <h1>Tasks from Class</h1>
            <ul>
                <?php foreach($classTask as $cTask) : ?>
                
                   <li>
                    <?php if($cTask->completed) : ?>
                        <strike><?= ucwords($cTask->description); ?></strike>

                    <?php else: ?>
                        <?= ucwords($cTask->description); ?>
                    
                     <?php endif ?>
                     
                   
                   </li>
                <?php endforeach ?>
            </ul>
        </div>

    <ul>
            <?php 
                foreach($animals as $animal){
                    echo "<li> $animal</li>";
                }
            ?>
    </ul>

        <h1>
               <?= ucwords('Task for the day') ?>
        </h1>
    <ul>
       <li>
       
       <strong>Name:</strong><?= $tasks['title']; ?>
       
       </li>
       <li>
       
       <strong>Due Date:</strong> <?= $tasks['due']; ?>
       
       </li>

       <li>
       
       <strong>Responsibility:</strong><?= $tasks['assigned_to']; ?>
       
       </li>
       <li>
       
       <strong>Status:</strong><?= $tasks['Completed'] ? 'Completed' : 'Incomplete'; ?>
       
       </li>
    </ul>
</body>
</html>