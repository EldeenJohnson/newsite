<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PRIMER - For Loop</title>
</head>
<body>
<a href="index.php">Home</a>
    <h1 style="color: teal">For Loop</h1>
    <hr/>
<?php     
    //A for loop statement that will carry out an action based on the value of the variable
    for($count = 0; $count < 20; $count++){
        $count = $count + 1;
        echo "<p> HELLO WORLD : The Count is: $count </P>";
        $count = $count -1;
    }
    for($count = 0; $count < 20; $count++){
        $total = $count+1;
    }
    echo "<p>The Total number of Count is: $total</p>";
?>
</body>
</html>