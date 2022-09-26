<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - String Manipulation</title>
</head>
<body>
    <a href="index.php">Home</a>
    <h1 style="color: teal">String Manipulation</h1>

    <?php
    //concatenation of strings
            $phrase1 = "Students who came late";
            $phrase2 = "In Class, Stand with Rock";
            $name = "eldeen johnson";
            echo $phrase1.", named Tiffany, ".$phrase2;
            echo '<br/>';
            
            //String transformation
            echo 'Uppercase first letter: '.ucfirst($name). '<br/>';
            echo 'Uppercase first letter of each word: ' .ucwords($name).'<br/> ';
            echo 'Uppercase: ' .strtoupper($name).'<br/> ';
            echo 'Uppercase: ' .strtolower("THIS WAS ALL UPPER CASE").'<br/> ';
            echo '<hr/>';
            echo 'Repeat String: '.str_repeat('a',10).'<br/>';
    ?>
    
</body>
</html>