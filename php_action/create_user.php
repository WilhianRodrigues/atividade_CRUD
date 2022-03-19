<?php
//Sessão
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect,$_POST['nome']);
    $email = mysqli_escape_string($connect,$_POST['email']);
    $senha = mysqli_escape_string($connect,$_POST['senha']);
    
    $sql = "INSERT INTO usuario(nome, email, senha) VALUES ('$nome','$email','$senha');";
    if(mysqli_query($connect, $sql)):
        header('Location: ../index.php');
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: ../cadastro.php');
    endif;
endif;
?>