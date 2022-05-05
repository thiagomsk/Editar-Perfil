<?php

include_once('conexao.php');


function alterausuario($conexao, $nome, $email, $senha,$EmailAntigo)
{
   $query = "update login set Nome = '{$nome}', Email = '{$email}', Senha = SHA1('{$senha}') where Email = '{$EmailAntigo}' ";
   $result =  mysqli_query($conexao, $query);

   if($result){
      header('location: login.php?alter=2');
      exit();
   }
   else{
      echo("error");
   }
}

function Exclui($conexao,$email){
   $query ="update usuarios set Situacao = 0 where Email = {$$email}";
   $result = mysqli_query($conexao,$query);


   if($result){
      header("location: PaginaGerenciador.php?desativa=true");
      die();
   }

   else{
      header("location: PaginaGerenciador.php?desativa=false");
      die();
   }
   
} 

/*function Ativausuarios($conexao, $email){
   $query ="update usuarios set Situacao = 1 where Email = {$email}";
   $result = mysqli_query($conexao,$query);
   
   if($result){
      header("location: PaginaGerenciador.php?ativa=true");
      die();
   }

   else{
      header("location: PaginaGerenciador.php?ativa=false");
      die();
   }
}  */


function cadastrarUsuario($conexao,$nome, $email, $senha){
    $query = "insert into login (Email, Senha, Nome) values ('{$email}', SHA1('{$senha}'),'{$nome}')";
    $result = mysqli_query($conexao, $query);
    if($result){
       header('location: login.php?success=1');
       exit();
    } else {
       header('location: PrimeiroAcesso.php?error=1');
       exit();
    }
 }

function buscausuario($conexao,$email){
   $arraybuscar = array();
   $result = mysqli_query($conexao, "Select Nome, Email, Senha from login where Email = '{$email}'");
   $busca = mysqli_fetch_assoc($result);
   array_push($arraybuscar, $busca);
   return $arraybuscar;

}


 function listausuario($conexao,$nome){
    $usuarios = array();
    $resultado = mysqli_query($conexao,"select Nome, Email, Senha from login where Nome = '{$nome}'");
    while($usuario = mysqli_fetch_assoc($resultado)){       
       array_push($usuarios, $usuario);
   }
    return $usuarios;
 }

?>