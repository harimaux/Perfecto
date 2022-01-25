<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfecto Sculptures - Admin Panel</title>
    <link href="style/style.css" rel="stylesheet">
</head>

<body>

    <?php include('common/header.php'); ?>

    <div class="admin_login_container">
        <form class="admin_login_form" action="">
            <input type="text" placeholder="Username..">
            <input type="password" placeholder="Password..">
            <div class="admin_login_submit"><input type="submit" value="Login"></div>
        </form>
        <div id="admin_form_switch">Resgister</div>
    </div>

    <div class="admin_register_container">
        <form class="admin_register_form" action="adminReg.php" method="POST">
            <input type="text" placeholder="First Name.." name="FirstName" required>
            <input type="text" placeholder="Last Name.." name="LastName" required>
            <input type="text" placeholder="Username.." name="Username" required>
            <input type="password" placeholder="Password.." name="Password" required>
            <div class="admin_register_submit"><input type="submit" name="submitAdmin" value="Register"></div>
        </form>
        <div id="admin_form_switch_back">Login</div>
    </div>

    <?php include('common/footer.php'); ?>

    <script src="js/script.js"></script>
</body>

</html>