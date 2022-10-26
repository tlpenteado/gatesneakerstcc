<?php
    session_start();
    //print_r($_SESSION);
    if ((!isset($_SESSION['email']) == true) and(!isset($_SESSION['senha']) == true )) 
    {
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> SISTEMA </title>
    <style>
        body{
            background-image: linear-gradient(45deg, black,grey);
            color:white;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
        </ul>
            </div>
        </div>
        <div class ="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </nav>
    <br> 
    <?php
        echo "<h1> Bem vindo <u>$logado</u></h1>";
    ?>
</body>
</html> 