<?php 
session_start();
require "connection.php";
$email = "";
$nome = "";
$sobrenome = "";
$senha = "";
$csenha = "";
$telefone = "";
$data_nasc = "";
$estado= "";
$errors = array();
//if user signup button
if(isset($_POST['signup'])){
    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $sobrenome = mysqli_real_escape_string($con, $_POST['sobrenome']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);
    $csenha = mysqli_real_escape_string($con, $_POST['csenha']);
    $telefone = mysqli_real_escape_string($con, $_POST['telefone']);
    $data_nasc = mysqli_real_escape_string($con, $_POST['data_nasc']);
    $estado = mysqli_real_escape_string($con, $_POST['estado']);
    if($senha !== $csenha){
        $errors['senha'] = "Senhas não conferem!";
    }
    $email_check = "SELECT * FROM cadastro WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email já cadastrado!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($senha, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO cadastro (nome, sobrenome, email, senha, telefone, data_nasc, estado, code, status)
                        values('$nome', '$sobrenome', '$email', '$encpass', '$telefone', '$data_nasc', '$estado', '$code', '$status')";
$data_check = mysqli_query($con, $insert_data);
if($data_check){
    $subject = "Código de verificação por email";
    $message = "Seu código de verificação é $code";
    $sender = "From: daarearjcadastro@gmail.com";
    if(mail($email, $subject, $message, $sender)){
        $info = "Enviamos um código de verificação para o seu email - $email";
        $_SESSION['info'] = $info;
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('location: user-otp.php');
        exit();
    }else{
        $errors['otp-error'] = "Falha ao enviar código!";
    }
}else{
    $errors['db-error'] = "Falha ao se cadastrar!";
}
}
}
    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM cadastro WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE cadastro SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['nome'] = $nome;
                $_SESSION['email'] = $email;
                header('location: home.php');
                exit();
            }else{
                $errors['otp-error'] = "Falha ao atualizar código!";
            }
        }else{
            $errors['otp-error'] = "Você digitou o código incorreto!";
        }
    }
    //if user click login button
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $senha = mysqli_real_escape_string($con, $_POST['senha']);
        $check_email = "SELECT * FROM cadastro WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['senha'];
            if(password_verify($senha, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['senha'] = $senha;
                    header('location: home.php');
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }
    //if user click continue button in forgot senha form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM cadastro WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE cadastro SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Código de redefinição de senha";
                $message = "Seu código de redefinição de senha é $code";
                $sender = "From: daarearjcadastro@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "Enviamos um código de redefinição de senha para o seu email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Falha ao enviar código!";
                }
            }else{
                $errors['db-error'] = "Algo deu errado!";
            }
        }else{
            $errors['email'] = "Este email não existe!";
        }
    }
    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM cadastro WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Crie uma nova senha.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "Código incorreto!";
        }
    }
    //if user click change senha button
    if(isset($_POST['change-senha'])){
        $_SESSION['info'] = "";
        $senha = mysqli_real_escape_string($con, $_POST['senha']);
        $csenha = mysqli_real_escape_string($con, $_POST['csenha']);
        if($senha !== $csenha){
            $errors['senha'] = "Senhas não conferem!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; 
            //getting this email using session
            $encpass = password_hash($senha, senha_BCRYPT);
            $update_pass = "UPDATE cadastro SET code = $code, senha = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Você alterou sua senha com sucesso. Agora você pode logar com sua nova senha.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Falha ao trocar sua senha!";
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: login-user.php');
    }
?>