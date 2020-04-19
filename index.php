<!DOCTYPE HTML>
<html lang="pl">

<head>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    .error {
      color: #FF0000;
    }

    .container-fluid {
      width: auto !important;
      margin-right: 0 !important;
      margin-left: 15% !important;
    }

    .alert {
      margin-right: 50% !important;
    }

    .thanks {
      font-family: sans-serif;
      font-display: auto;
    }

    .results {
      margin-left: 30%; 
    }

    .card-body {
      margin-right: 50%;
    }

    select {
      width: 20%;
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sonda o Pizzeriach</title>
</head>

<body>

  <?php
  // define variables and set to empty values

  $nameErr = "";
  $user = "";
  $bosco = 0;
  $bube;
  $iggy;
  $mania;
  $margherita;
  $muzyczna;
  $niezly = 0;
  $nova;
  $oliwa;
  $pipi = 0;
  $piec;
  $pany = 0;
  $pizzaso;
  $portofino;
  $quattro;
  $si;
  $tutti;
  $vaffa;


  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["user"])) {
      if (empty($_POST["user"])) {
        $nameErr = "Wpisz swoje imię/ksywkę";
      } else {
        $user = test_input($_POST["user"]);
        //only letters (also Polish diacritic signs)
        if (!preg_match("/^[a-zA-ZąąćęłńóśźżĄĆĘŁŃÓŚŹŻ ]*$/", $user)) {
          $nameErr = "<div class='alert alert-danger' role='alert'>" . "Tylko litery i spacje są dozwolone w polu imienia" . "</div>";
        }
      }
      require('formvalidator.php');

      if($isSubmitCorrect == true){
      require('query.php');
    }

    }
  }
  
  require('form.php');
  ?>

</body>

</html>