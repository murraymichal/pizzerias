<!DOCTYPE html>
<html lang="pl">

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyniki sondy</title>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysql";
    $translations = array(
        "bosco" => "Bosco",
        "bube" => "Bube",
        "iggy" => "Iggy Pizza",
        "mania" => "Mania Smaków",
        "margherita" => "Margherita",
        "muzyczna" => "Pizzeria Muzyczna",
        "niezly" => "Niezły Dym",
        "nova" => "Nova",
        "ogien" => "Ogień",
        "oliwa" => "Oliwa i Ogień",
        "pipi" => "Pizzeria Pi",
        "piec" => "Piec na Szewskiej",
        "pany" => "Pizza Pany",
        "pizzaso" => "Pizzaso",
        "portofino" => "Portofino",
        "quattro" => "Quattro Gusti",
        "si" => "Pizzeria Si",
        "tutti" => "Tutti Santi",
        "vaffa" => "Vaffa Napoli",
    );

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $ranking = $conn->query("select * from restaurants order by threestars desc");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;

    $numOfRows = $ranking->rowCount();

    echo "<div class='container'> 
            <table class='table'>
                <thead class='thead-dark'>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Pizzeria</th>
                        <th scope='col'>Ilość ***</th>
                        <th scope='col'>Ilość **</th>
                        <th scope='col'>Ilość *</th>
                        <th scope='col'>Suma pktów</th>
                    </tr>
                </thead>";


        $j = 1;
        foreach ($ranking as $row) {
            $sum = $row['threestars'] + $row['twostars'] + $row['onestar'];
            echo "      <tr>
            <th scope='row'>".$j."</th>
            <td>".$translations[$row['restaurant']]."</td>
            <td>".($row['threestars']/3)."</td>
            <td>".($row['twostars']/2)."</td>
            <td>".$row['onestar']."</td>
            <td>".$sum."</td>
            </tr>";
            $j++;
        }

    ?>
</body>

</html>