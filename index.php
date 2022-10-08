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
    <button type="button" class="btn btn-success">Click Here</button>
<?php require 'includes/footer.php' ?>