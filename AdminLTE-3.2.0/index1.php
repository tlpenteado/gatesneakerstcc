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
<html>
<head>
    <meta charset="utf-8" />
    <title>Carrinho Compra</title>
    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Denny Azevedo">
    <meta name="keywords" content="web, curso web, css, html, js, javascript">
    <meta name="description" content="Desenvolvimento WEB - Treinamento e aperfeiçoamento">
    <link href="https://fonts.googleapis.com/css?family=Hepta+Slab:400,700|Lato:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="models">
        <div class="models-item">
            <a href="">
                <div class="models-item--img"><img src="" /></div>
                <div class="models-item--add">+</div>
            </a>
            <div class="models-item--price">R$ --</div>
            <div class="models-item--name">--</div>
            <div class="models-item--desc">--</div>
        </div>
        <div class="cart--item">
            <img src="" />
            <div class="cart--item-nome">--</div>
            <div class="cart--item--qtarea">
                <button class="cart--item-qtmenos">-</button>
                <div class="cart--item--qt">1</div>
                <button class="cart--item-qtmais">+</button>
            </div>
        </div>
    </div>
    <header>
        <div class="menu-openner">
            <span>0</span>
            <span class="material-icons">shopping_cart</span>
        </div>
    </header>
    <main>
        <h1>Modelos <div class ="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a></h1>  
        <div class="models-area"></div>
    </main>
    <aside>
        <div class="cart--area">
            <div class="menu-closer">
                <span class="material-icons">close</span>
            </div>
            <h1>Seus Modelos</h1>
            <div class="cart"></div>
            <div class="cart--details">
                <div class="cart--totalitem subtotal">
                    <span>Subtotal</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem desconto">
                    <span>Desconto (-10%)</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem total big">
                    <span>Total</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--finalizar">Finalizar a compra</div>
            </div>
        </div>
    </aside>
    <div class="modelsWindowArea">
        <div class="modelsWindowBody">
        
            <div class="modelsInfo--cancelMobileButton">Voltar</div>
            <div class="modelsBig">
                <img src="" />
            </div>
            <div class="modelsInfo">
                <h1>--</h1>
                <div class="modelsInfo--desc">--</div>
                <div class="modelsInfo--sizearea">
                    <div class="modelsInfo--sector">Escala</div>
                    <div class="modelsInfo--sizes">
                        <div data-key="0" class="modelsInfo--size">Pequeno <span>--</span></div>
                        <div data-key="1" class="modelsInfo--size">Médio <span>--</span></div>
                        <div data-key="2" class="modelsInfo--size selected">Grande <span>--</span></div>
                    </div>
                </div>
                <div class="modelsInfo--pricearea">
                    <div class="modelsInfo--sector">Preço</div>
                    <div class="modelsInfo--price">
                        <div class="modelsInfo--actualPrice">R$ --</div>
                        <div class="modelsInfo--qtarea">
                            <button class="modelsInfo--qtmenos">-</button>
                            <div class="modelsInfo--qt">1</div>
                            <button class="modelsInfo--qtmais">+</button>
                        </div>
                    </div>
                </div>
                <div class="modelsInfo--addButton">Adicionar ao carrinho</div>
                <div class="modelsInfo--cancelButton">Cancelar</div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/models.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>