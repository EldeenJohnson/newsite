<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Date-Time Manipulation</title>
</head>
<body>
    <a href="index.php">Home</a>
    <h1 style="color: teal">DateTime Manipulation</h1>
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
</body>
</html>