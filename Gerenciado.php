<?php
session_start();
include_once("conexao.php");
include_once("funcoes.php");
$nome = $_SESSION["Nome"];
?>

<!DOCTYPE html>
<html lang="pt-br">



<head>
    <meta charset="uft-8">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/gerenciarperfil.css" >

</head>

<body>
    <div class="titulo-sistema-login">
        <h1>Cadastro Geral  de Login</h1>
    </div>

    <header>
        <navid="nav-container">
            <div id="navbar-links">
                <div class="controle">
                    <a id="Nome" href="#"><?=$nome?></a><br/>
                    <a id="sair" href="login.php" class="botao-direita">SAIR</a>
                </div>
            </div>
        </nav>
    </header>
 
    <div>
        <?php
        if(array_key_exists("desativa",$_GET) && $_GET["desativa"] == "true") {
        
        ?>
            <?php if( isset($_GET['desativa']) == "true" ){ echo "<p style='color: #f00;'>Usuario Desativado</p>"; }?>
            <?php if( isset($_GET['desativa']) == "false" ){ echo "<p style='color:#f00;'Erro ao desativar</p>"; }?>
        <?php
            } 
        ?>

        <?php
        if(array_key_exists("ativa",$_GET) && $_GET["ativa"] == "true") {
        
        ?>
            <?php if( isset($_GET['ativa']) == "true" ){ echo "<p style='color: green;'>Usuario ativado</p>"; }?>
            <?php if( isset($_GET['ativa']) == "false" ){ echo "<p style='color: red;'Erro ao ativar</p>"; }?>

        <?php
            } 
            if( isset($_GET['altererror']) == 1){ echo "<p style='color: red;'>Não foi possivel altera, tente novamente!</p>"; }

        ?>
        <table class="table table-bordered">
            <thead>
            <tr>

                <th>Nome</th>
                <th> Seu email </th>
                <th>Editar perfil </th>
            </tr>
            </thead>
            <tbody>
            
            <?php
                $usuarios = listausuario($conexao,$nome);
                foreach($usuarios as $usuario){
            ?>
            <tr>
                <td><?=$usuario ["Nome"]?></td>
                <td><?=$usuario ["Email"]?></td> 
                <td> 
                    <div class="btn-group" role="group" aria-label="Third group">
                        <form action="perfusuario.php" method="post">
                            <input type="hidden" name="Email" value="<?=$usuario["Email"]?>"></input>
                            <button type="submit" class="submit"><img src="./Imagens2/pen-fill.svg"></button>
                        </form>
                    </div>
                </tr>
                    <div class="btn-group" role="group" aria-label="Third group">
                        <form action="perfusuario.php" method="post">
                            <input type="hidden" name="Email" value="<?=$usuario["Email"]?>"></input>
                        </form>
                    </div>
            
            <?php
             } 
            ?> 
            </tbody>
        </table>
    </div>
</body>
</html>