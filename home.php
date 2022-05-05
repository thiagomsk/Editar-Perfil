<?php
session_start();
include("conexao.php");
include("funcoes.php");
$nome = $_SESSION["Nome"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="uft-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Formulário Cadastro</title>

</head>

<?php

if( !$_SESSION ){
    header('location: login.php');
    exit();
}
?>

<body>
    <h1 class="titulo-aba-cursos">home em construção por outro colaborador</h1>

    <header>
        <navid="nav-container">
            <div id="navbar-links">
                <div class="controle">
                    <a id="Nome" href="#"><?=$nome?></a><br/>
                    <a id="sair" href="gerenciado.php" class="botao-direita">Editar perfil</a>
                </div>
            </div>
        </nav>
    </header>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>