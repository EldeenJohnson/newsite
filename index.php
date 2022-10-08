<?php 
    $title = "Index";
    include 'includes/header.php'; ?>  

    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>

    <?php 
        //Printing to HTML using echo
        echo 'Hello PHP!' ;
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
        
    ?>

    <?php
        // declare variable
        $name = 'Eldeen Johnson';
        $age = 36;

    
        // echo variable
        echo $name;
        echo '<h1>My Name is : '.$name.'</h1>';
        echo '<h1>My age is : '.$age.'</h1>';
        //Echo using double quotes and interpolation
        echo "<h1>My Name is : $name </h1>";

    ?>
    <button type="button" class="btn btn-dark">Click Here</button>
    <a href="https://imaginicreations.com" target="_blank" class="btn btn-primary">Imaginicreations.com</a>
    <a href="https://www.instagram.com/imagini_creations/?igshid=YmMyMTA2M2Y%3D" target="_blank" class="btn btn-success">Photography</a>
    <a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a>
<?php require 'includes/footer.php' ?>