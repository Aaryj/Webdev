<!DOCTYPE html>
<html>
<head>
    <title>PHP POST Method</title>
</head>
<body>

    <h1>User Information Form</h1>

    <form method="POST">

        <label>Name:</label>
        <input type="text" name="name">

        <br><br>

        <label>Email:</label>
        <input type="email" name="email">

        <br><br>

        <input type="submit" value="Submit">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $name = $_POST['name'];
            $email = $_POST['email'];

            echo "<h2>Submitted Information</h2>";
            echo "Name: " . $name . "<br>";
            echo "Email: " . $email;
        }

    ?>

</body>
</html>
