<?php
//Sessão
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect,$_POST['nome']);
    $sobrenome = mysqli_escape_string($connect,$_POST['sobrenome']);
    $email = mysqli_escape_string($connect,$_POST['email']);
    $idade = mysqli_escape_string($connect,$_POST['idade']);
    $senha = mysqli_escape_string($connect,$_POST['senha']);
    
    $id = mysqli_escape_string($connect,$_POST['id']);
    
    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = $idade WHERE id = '$id';";
    if(mysqli_query($connect, $sql)):
        header('Location: ../clientes.php?');
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar";
        header('Location: ../clientes.php?');
    endif;
endif;
?>
