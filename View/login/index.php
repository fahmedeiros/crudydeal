<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Loign</title>
        <link rel="stylesheet" href="../../Public/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../Public/css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-default panel-login">
                    <div class="panel-heading text-center">
                       <h5>TELA DE LOGIN</h5>
                    </div>
                    <div class="panel-body">
                        <form action="../../Controller/validation.php" method="POST">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="text" name="usuario" placeholder="Usuário" class="form-control">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-lock"></i>
                                </span>
                                <input type="password" name="senha" placeholder="Senha" class="form-control">
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info">Login</button>
                            </div>
                        </form>
                    </div>

                    <?php
                        if(isset($_GET["msg"])){
                            $msg_ext = $_GET["msg"] == "erro_login" ? "Login Inválido!" : "Dados Insuficientes!";?>
                        <div class="panel-footer text-center">
                            <i class="glyphicon glyphicon-warning-sign"></i>
                            <?php echo $msg_ext ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </body>
</html>