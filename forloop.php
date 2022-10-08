<?php 
    $title = "For Loop";
    include 'includes/header.php'; ?> 

<body>
    <h1 style="color: teal"><?php echo $title ?></h1>
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
<?php require 'includes/footer.php' ?>