<?php 
    $title = "WhileDoWhile";
    include 'includes/header.php'; ?> 

<body>
    <h1 style="color: teal"><?php echo $title ?></h1>
    <hr/>
<?php
    $grade = 0;
    //INFINITE LOOP
   /* while($grade < 10){
        echo '<p> I AM LESS THAN 10!</P>';
    }*/

     while($grade < 10){
        echo "<p> I AM LESS THAN 10!: I am $grade </P>";

        $grade++;
    }

    echo 'Exit While Loop!';
?>

<h1 style="color: teal">Do-While Loop</h1>
<?php
//Post Condition loop
    $grade = 0;
    do{ echo '<p> I AM LESS THAN 10!: I am '.$grade.'</P>';
        $grade++;
    }while($grade < 10);
        echo 'Exit Do-While Loop!';

?>

<?php require 'includes/footer.php' ?>
