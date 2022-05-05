<?php  
session_start();
include('config.php');
include('funcoes.php');

// verifica se os campos não estão vazios
if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha']) ){

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      

      //verifcar email repetido e barrar
      $queryemail = "select Email from login where Email = '{$email}'";
      $resultado = mysqli_query($conexao, $queryemail);

         if(mysqli_num_rows($resultado) >= 1){
            header('location: PrimeiroAcesso.php?email=2'); 
            exit();
        }else{
         cadastrarUsuario($conexao, $nome, $email, $senha);
         exit();
        }
      
       
        
   }
  


else{
   header( "location: PrimeiroAcesso.php?campos=1");
 
   exit();
}

echo "<br><a href='PrimeiroAcesso.php' style='padding: 1px; background-color: #efefef; border:#efefef 1px solid; text-decoration: none; color: #000;'>Voltar</a>";