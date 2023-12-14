<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="nome" placeholder="Digite seu nome" required value="<?php echo $nome ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required value="<?php echo $sobrenome ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Degite seu e-mail" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="telefone" placeholder="Telefone com DDD" required value="<?php echo $telefone ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="senha" placeholder="Crie um senha" required value="<?php echo $senha ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="csenha" placeholder="Confirme sua senha" required value="<?php echo $csenha ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="date" name="data_nasc" required value="<?php echo $data_nasc ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="estado" placeholder="Estado" required value="<?php echo $estado ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Já é inscrito? <a href="login-user.php">Entre aqui</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>