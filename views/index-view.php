<?php 
include 'includes/header.view.php'; 
include 'includes/nav.view.php';
?>

        
    <header>
    
        
        <h1><?= $greeting ?></h1>
    </header>

    <h1>Submit Your Name</h1>


        <form action="/names" method="POST">
            <input type="text" name="name">

            <button type="submit">Submit</button>
        </form>

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

<?php include 'includes/footer.view.php'; ?>