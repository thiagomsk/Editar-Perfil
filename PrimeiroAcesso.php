<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="uft-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
    <title>Formulário Cadastro</title>

</head>

<body>
    
    <h1 class="titulo-sistema-login">Pagina em construção por outro colaborador</h1>
    <div class="tela-login container">
        <ul class="nav nav-tabs" id=login-container>
            <li role="presentation"><a style="color:#FFFFFF" href="login.php">Login</a></li>
            <li role="presentation" class="active"><a href="PrimeiroAcesso.php">Primeiro Acesso</a>
                <div>
                    <form class="form-horizontal" action="cadastro.php" method="POST">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputnome"
                                    placeholder="Digite seu nome completo" type="text" name='nome'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email: </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3"
                                    placeholder="Escreva seu email" type="text" name='email'>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3"
                                    placeholder="Insira sua senha" type="text" name='senha'>
                            </div>
                        </div>
                </div>



                        <div class="form-group" >
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Cadastrar</button>
                            </div>
                            <?php if( isset($_GET['campos']) ){ echo "<p style='color: #f00;'>Todos os campos precisam ser Preenchidos!</p>"; }?>
                            <?php if( isset($_GET['error']) == 1 ) echo"<p style='color: #f00;'>Não foi possível cadastrar usuário, tente novamente.</p>";  ?>
                            <?php if( isset($_GET['email']) && $_GET['email'] == 2 ){ echo "<p style='color: #f00;'>O e-mail já cadastrado</p>"; }?>

                        </div>
                    </form>
                </div>
            </li>
        </ul>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>