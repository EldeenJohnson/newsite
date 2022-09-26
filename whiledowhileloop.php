<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - While / Do while Loop</title>
</head>
<body>
    <a href="index.php">Home</a>
    <h1 style="color: teal">While Loop</h1>
<?php
    $grade = 0;
    //INFINITE LOOP
   /* while($grade < 10){
        echo '<p> I AM LESS THAN 10!</P>';
    }*/

     while($grade < 10){
        echo '<p> I AM LESS THAN 10!</P>';
        $grade++;
    }

    echo 'Exit Loop!';
?>

<h1 style="color: teal">Do-While Loop</h1>
<?php
//Post Condition loop
    $grade = 0;
    do{ echo '<p> I AM LESS THAN 10!</P>';
        $grade++;
    }while($grade < 10);
        echo 'Exit Loop!';

?>

</body>
</html>