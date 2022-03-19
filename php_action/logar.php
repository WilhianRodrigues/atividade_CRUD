<?php

session_start();//inicia uma nova sessao ou resume uma sessao existente$

require_once 'db_connect.php';


if(isset($_POST['btn-login'])){
    $email = mysqli_escape_string($connect,$_POST['email']);
    $senha = mysqli_escape_string($connect,$_POST['senha']);
    
        
    $sql = "SELECT * FROM usuario WHERE email='$email' AND senha= '$senha';";
    $resultado = $connect->query($sql);
    if($resultado->num_rows > 0){
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
        header('Location: ../tabela_escolha.php');
        $_SESSION['mensagem'] = "Login efetuado com sucesso!";
    }else{
        $_SESSION['mensagem'] = "Email e/ou senha incorretos!";
        header('Location: ../index.php');
    }
}
?>
