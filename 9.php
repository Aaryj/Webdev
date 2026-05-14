<!DOCTYPE html>
<html>
<head>
    <title>String Manipulation</title>
</head>
<body>

    <h1>PHP String Operations</h1>

    <?php

        $str1 = "Hello World";
        $str2 = "PHP Programming";

        echo "<b>Original String:</b> " . $str1 . "<br><br>";

        // String Length
        echo "<b>String Length:</b> " . strlen($str1) . "<br><br>";

        // Reverse String
        echo "<b>Reversed String:</b> " . strrev($str1) . "<br><br>";

        // Substring
        echo "<b>Substring:</b> " . substr($str1, 0, 5) . "<br><br>";

        // Uppercase
        echo "<b>Uppercase:</b> " . strtoupper($str1) . "<br><br>";

        // Lowercase
        echo "<b>Lowercase:</b> " . strtolower($str1) . "<br><br>";

        // Concatenation
        echo "<b>Concatenated String:</b> " . $str1 . " " . $str2;

    ?>

</body>
</html>