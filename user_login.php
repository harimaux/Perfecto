<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfecto Sculptures - Login</title>
    <link href="style/style.css" rel="stylesheet">
</head>

<body>

    <?php include('common/header.php'); ?>

    <div class="login_container">
        <form class="login_form" action="connections/logged_in.php" method="POST">
            <input type="text" placeholder="Username.." name="username" required>
            <input type="password" placeholder="Password.." name="password" required>
            <div class="login_submit"><input type="submit" name="submit"></div>
        </form>
    </div>

    <?php include('common/footer.php'); ?>

</body>

</html>