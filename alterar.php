<?php  
session_start();
include_once('conexao.php');
include_once('funcoes.php');    

// verifica se os campos não estão vazios
if (!empty($_POST['nome']) && !empty($_POST['email']) &&  !empty($_POST['senha']) ){
   
      $EmailAntigo = $_POST['EmailAntigo'];
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      alterausuario($conexao, $nome, $email, $senha, $EmailAntigo);
   
      header( "location: perfusuario.php");
        exit();
}

else{
   echo("erro");
}
