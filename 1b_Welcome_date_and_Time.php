<!DOCTYPE html>
<html>
<head>
    <title>PHP Date and Time</title>
</head>
<body>

    <?php
        echo "Welcome to PHP Programming<br>";
        date_default_timezone_set("Asia/Kolkata");

        echo "<h3>Current Date: " . date("d-m-Y") . "</h3>";
        echo "<h3>Current Time: " . date("h:i:s A") . "</h3>";
    ?>

</body>
</html>
