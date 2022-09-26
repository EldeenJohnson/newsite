<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer  - Switch Statements</title>
</head>
<body>
    <a href="index.php">Home</a>
    <h1 style="color: teal">Exam Results Using Switch Statements</h1>
<?php     
    //A switch statement that will carry out an action based on the value of the variable
    
    $grade = 'A';
    //Switch Statement
    switch($grade){
        case 'A':
            echo '<h2 style="color: green">YOU ARE A SUPERSTAR!</h2>';
            break;
        case 'B':
            echo '<h2 style="color: cyan">YOU DID WELL!</h2>';
            break;
        default:
            echo '<h2 style="color: red">YOU HAVE FAILED...</h2>';
            break;
    }
?>

    
</body>
</html>