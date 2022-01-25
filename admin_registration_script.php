<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfecto - Admin Registration</title>
    <link href="style/style.css" rel="stylesheet">
</head>

<body>

    <?php include('common/header.php'); ?>

    <?php

    include('dbConn.php');

    if (isset($_POST['submitAdmin'])) {

        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Username = $_POST['Username'];
        $AdminPassword = $_POST['Password'];

        $hashedPass = password_hash($AdminPassword, PASSWORD_ARGON2ID);

        $sql = "INSERT INTO admin (FirstName, LastName, Username, Password) VALUES ('$FirstName', '$LastName', '$Username', '$hashedPass')";

        if (!mysqli_query($connection, $sql)) {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }

        echo "<div class='register_success'>Account created, back to<a href='admin_login_register.php'>- login page</a>.</div>";
        mysqli_close($connection);
    }

    ?>

</body>

</html>