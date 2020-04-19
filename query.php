<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 
    "<div class='alert alert-success container' role='alert'>
    <span class='thanks'>Dzięki za udział w sondzie!</span> <button type='button' class='btn btn-link results'><a href='results.php'>Wyniki</a></button>
    </div>";

    $stmtThreeStars = $conn->prepare("UPDATE restaurants SET threestars = threestars + :threestars where restaurant = :restaurant");
    $stmtTwoStars = $conn->prepare("UPDATE restaurants SET twostars = twostars + :twostars where restaurant = :restaurant");
    $stmtOneStars = $conn->prepare("UPDATE restaurants SET onestar = onestar + :onestar where restaurant = :restaurant");
    $stmtNotVisited = $conn->prepare("UPDATE restaurants SET notvisited = notvisited + :notvisited where restaurant = :restaurant");

    foreach ($_POST as $key => $value) {
        if ($value == 3) {
            $stmtThreeStars->bindParam(':threestars', $value);
            $stmtThreeStars->bindParam(':restaurant', $key);
            $stmtThreeStars->execute();
        } elseif ($value == 2) {
            $stmtTwoStars->bindParam(':twostars', $value);
            $stmtTwoStars->bindParam(':restaurant', $key);
            $stmtTwoStars->execute();
        } elseif ($value == 1) {
            $stmtOneStars->bindParam(':onestar', $value);
            $stmtOneStars->bindParam(':restaurant', $key);
            $stmtOneStars->execute();
        } else  {
            $stmtNotVisited->bindParam(':notvisited', $value);
            $stmtNotVisited->bindParam(':restaurant', $key);
            $stmtNotVisited->execute();
        } 
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
