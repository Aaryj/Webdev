<!DOCTYPE html>
<html>
<head>
    <title>PHP Aray Example</title>
</head>
<body>

    <h1>Array Operations in PHP</h1>

    <?php

        // Create Array
        $students = array("Aary", "Rahul", "Siddhesh", "Arnav");

        echo "<h3>Displaying Array Values Using Loop</h3>";

        // Using foreach loop
        foreach($students as $name) {

            echo $name . "<br>";
        }

        echo "<br>";

        // Array Functions
        echo "<b>Total Elements:</b> " . count($students) . "<br><br>";

        echo "<b>Array in Sorted Order:</b><br>";

        sort($students);

        print_r($students);

    ?>

</body>
</html>
