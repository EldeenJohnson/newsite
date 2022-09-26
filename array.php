<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Arrays</title>
</head>
<body>
<a href="index.php">Home</a>
    <h1 style="color: teal">Arrays</h1>

    <?php
        // a variable
        $num = 3;

        // an array
        // homogenius array -> Only one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10,55,98,47,88,45,101,911,1004);

        // you can access the value in the subscript of the array using the index
        echo $numbers[5];
        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>Array Numbers is size: $size</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
    ?>
    
</body>
</html>