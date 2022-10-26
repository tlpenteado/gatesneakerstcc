<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SITE </title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, black, grey);
            text-align: center;
            color: white;
        }
        .box{
            position: absolute; 
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0,0,0,0.8);
            padding: 30px; 
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white; 
            border: 3px solid grey;
            border-radius: 15px;
            padding: 10px;
        }
        a:hover{
            background-color: grey;
        }
    </style>
</head>
<body>
    <h1> Seja bem vindo ao site GateSneakers </h1>
    <h2> Escolha uma opção </h2>
    <div class="box">
        <a href ="login.php">Login</a>
        <a href ="cadastro.php">Cadastre-se</a>
    </div>
</body>
</html>