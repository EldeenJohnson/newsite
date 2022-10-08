<?php 
    $title = "Switch";
    include 'includes/header.php'; ?> 

<body>
    <h1 style="color: teal">Exam Results Using Switch Statements</h1>
    <hr/>
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

<?php require 'includes/footer.php' ?>
