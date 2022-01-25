<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfector - Sculptures Search</title>
    <link href="style/style.css" rel="stylesheet">
</head>

<body>

    <?php include('common/header.php'); ?>

    <?php

    include('dbConn.php');

    if (isset($_POST['submitSearch'])) {

        $seachInput = mysqli_real_escape_string($connection, $_POST['searchInput']);

        $query = "SELECT * FROM products WHERE ProductName LIKE '%$seachInput%' OR Description LIKE '%$seachInput%' OR Category LIKE '%$seachInput%'";

        $results = mysqli_query($connection, $query);

        if (mysqli_num_rows($results) == 0 || $seachInput == "") {
            echo "<div class='search_error'><h3>Sorry, no items were found..</h3></div>";
        } else {

            echo "<div class='search_container'>";
            echo "<h1>Our stock</h1>";

            while ($row = mysqli_fetch_array($results)) {

                $productname = $row['ProductName'];
                $description = $row['Description'];
                $category = $row['Category'];
                $price = $row['Price'];
                $image = $row['Image'];

                echo "<div class='search_div'>";
                echo "<div class='search_text'>";
                echo "<h3>Item name: " . $productname . "</h3>";
                echo "<p>Discription: " . $description . "</p>";
                echo "<p>Category: " . $category . "</p>";
                echo "Item price: " . "£" . $price . "</p>";
                echo "</div>";
                echo "<img src=" . $image . ">";
                echo "</div>";
            }

            echo "</div>";
        }
    }

    ?>

    <?php include('common/footer.php'); ?>

</body>

</html>