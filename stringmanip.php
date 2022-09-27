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
            echo 'Repeat String - Nested Function: '.strtoupper(str_repeat('a',10)).'<br/>';
            echo 'get a Substring: ' .substr($name, 5, 10).'<br/>';

            echo 'Get position of string: ' .strpos($name, 'j').'<br/>';
            //retuns Null
            //echo 'Get position of string: ' . ($combine, 'z').'<br/>';
            echo 'Find Character "h": ' .strchr($name, 'h').'<br/>';
            echo 'Find Character "l": ' .strchr($name, 'l').'<br/>';
            echo 'Find Character "n": ' .strchr($name, 'n').'<br/>';
            echo 'Find Character "j": ' .strchr($name, 'j').'<br/>';

            echo 'Find lenght of a string: ' .strlen($name).'<br/>';

            //triming spaces
            echo 'Without Trim: '. "A" . " B C D " . "E" . '<br/>';
            echo 'Trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
            echo 'Trim spaces to the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
            echo 'Trim spaces to the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';

            echo 'Replace string with another: '.str_replace("Stand", "Sit", $phrase2). '<br/>';

            


             


    ?>
    
</body>
</html>