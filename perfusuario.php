<?php
session_start();
include_once('conexao.php');
include_once('funcoes.php');
$nome = $_SESSION["Nome"];


if(isset($_POST['submit']))
{
    //print_r('Nome: '. $_POST['nome']);
    //print_r('<br>');
    //print_r('Email'. $_POST['email']);
    //print_r('<br>');
    //print_r('Senha: '. $_POST['senha']);


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar perfil de usuario</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
    
    </style>

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
</head>
<body>
    <div class="box">
                <?php 
                    $email = $_POST["Email"];
                    $usuario = buscausuario($conexao, $email);
                    foreach($usuario as $value){
                ?>
               
                        
        <form action="alterar.php" method="POST">
        <div class="form-group">
        <!-- usar uma variavel de sessão ao inves do input hidden -->
        <input type="hidden" name="EmailAntigo" value="<?=$_POST["Email"]?>"></input>
        



            <fieldset>
                <legend><b>EDITE SEU PERFIL<br>(se quiser que informacões não sejam trocadas coloque a mesma utilizada anteriormente):</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome: </label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" class="inputUser" required>
                    <label for="senha " class="labelInput">Senha:</label>
                <br><br>
                <input type="submit" name="submit" id="submit" value="Salvar alterações" >
                
            </fieldset>
        </form>
    </div>
    <?php  } ?>
</body>
</html>