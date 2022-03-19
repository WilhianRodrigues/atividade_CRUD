<?php
//Sessão
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect,$_POST['nome']);
    $sobrenome = mysqli_escape_string($connect,$_POST['sobrenome']);
    $email = mysqli_escape_string($connect,$_POST['email']);
    $idade = mysqli_escape_string($connect,$_POST['idade']);
    $senha = mysqli_escape_string($connect,$_POST['senha']);
    
    $sql = "INSERT INTO clientes(nome, sobrenome, email, idade) VALUES ('$nome','$sobrenome','$email',$idade);";
    if(mysqli_query($connect, $sql)):
        header('Location: ../clientes.php');
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: ../adicionar_cliente.php');
    endif;
endif;
?>