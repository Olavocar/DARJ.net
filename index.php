<?php require_once "controlleruserdata.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
    <link href=favicon_io/favicon-16x16.png rel=icon>
</head>
<body class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="index.php" method="POST" autocomplete="">
                <h2 class="text-center">Cadastro</h2>
                    <p class="text-center">É rápido e fácil.</p>
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
                        <input class="form-control" type="email" name="email" placeholder="Digite seu e-mail" required value="<?php echo $email ?>">
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
                        <select class="form-control" type="select" name="estado" placeholder="Estado" required value="<?php echo $estado ?>">
                                       <option value=EX>Estrangeiro</option>
                                       <option value=AC>Acre</option>
                                       <option value=AL>Alagoas</option>
                                       <option value=AP>Amapá</option>
                                       <option value=AM>Amazonas</option>
                                       <option value=BA>Bahia</option>
                                       <option value=CE>Ceará</option>
                                       <option value=DF>Distrito Federal</option>
                                       <option value=ES>Espírito Santo</option>
                                       <option value=GO>Goiás</option>
                                       <option value=MA>Maranhão</option>
                                       <option value=MT>Mato Grosso</option>
                                       <option value=MS>Mato Grosso do Sul</option>
                                       <option value=MG>Minas Gerais</option>
                                       <option value=PA>Pará</option>
                                       <option value=PB>Paraíba</option>
                                       <option value=PR>Paraná</option>
                                       <option value=PE>Pernambuco</option>
                                       <option value=PI>Piauí</option>
                                       <option value=RJ>Rio de Janeiro</option>
                                       <option value=RN>Rio Grande do Norte</option>
                                       <option value=RS>Rio Grande do Sul</option>
                                       <option value=RO>Rondônia</option>
                                       <option value=RR>Roraima</option>
                                       <option value=SC>Santa Catarina</option>
                                       <option value=SP>São Paulo</option>
                                       <option value=SE>Sergipe</option>
                                       <option value=TO>Tocantins</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Enviar">
                    </div>
                    <div class="link login-link text-center">Já é inscrito? <a href="login-user.php">Entre aqui</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>