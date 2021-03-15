<!DOCTYPE html>
<html lang=eng>
<head>
    <title>
        Google Map URLs
    </title>
</head>
<body>

    <p>
        Google Maps URLs
    </p>

    <form action="foodsearch.php" method="post">
        Food: <input type="text" name="food">
        <br>
        City: <input type="text" name="city">
        <br>
        <input type="submit" name="submitButton" value="Submit the form">
    </form>

    <?php
        if (isset($_POST["submitButton"])) {
            $food = null;
            $city = null;
            $queryString = null;
        }
        $food = $_POST["food"];
        $city = $_POST["city"];
        $queryString = $food . "+" . $city;
        echo "<p>We are searching for " . 
        $food . " in " . $city . ".</p>";

        $mapsUrl = "https://www.google.com/maps/search/?api=1&query=" . $queryString;

        echo "<br><div><a href='" . $mapsUrl .
        "' target='_blank'>Click here to Search</a></div>";
    ?>


</body>
</html>