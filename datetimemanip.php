<?php 
    $title = "DateTime Manipulation"; 
    include 'includes/header.php'; ?> 

<body>
    <h1 style="color: teal"><?php echo $title ?></h1>
    <hr/>
    <?php
            $datenow = getdate();
            echo "Today's Date: <br/>";
            echo $datenow['mday'].'<br/>';
            echo $datenow['mon'].'<br/>';
            echo $datenow['year'].'<br/>';
            echo'<hr/>';

            echo "Today's Date: " .$datenow['mday'] . '/' .$datenow['mon'] . '/' .$datenow['year'] .'<br/>';

            echo time() . '<br/>';
            echo'<hr/>';
            print date("m/d/y : g.i:s<br>", time()) .'<br/>';
            print "Today is: ";
            print date("j F Y, \a\\t g.i a", time());

    ?>
<?php require 'includes/footer.php' ?>