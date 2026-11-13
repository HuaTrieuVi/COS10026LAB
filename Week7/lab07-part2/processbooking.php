<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1> Rohirrim Tour Booking Confirmation</h1>
    <?php
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $booking = $_POST["booking"];
        $species = $_POST["species"];
        if ($species === "M") {
            $species = "Human";
        }
        elseif ($species === "D") {
            $species = "Dwarf";
        }
        elseif ($species === "E") {
            $species = "Elf";
        }
        elseif ($species === "H") {
            $species = "Hobbit";
        }
        $age = $_POST["age"];
        $food = $_POST["food"];
        $partysize = $_POST["partysize"];
        echo "<p> Hello $firstname $lastname !</p>";
        print ("You select:");
        echo (implode(" and ",$booking));
        echo "<p> Species: $species </p>";
        echo "<p> Age: $age </p>";
        echo "<p> Meal Pre: $food </p>";
        echo "<p> Number of travellers: $partysize </p>";
    ?>
</body>
</html>