<?php
//Sessão
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $cod = mysqli_escape_string($connect,$_POST['codigo']);
    $nomeProduto = mysqli_escape_string($connect,$_POST['nomeproduto']);
    $preco = mysqli_escape_string($connect,$_POST['preco']);
    
    
    $sql = "INSERT INTO produto(cod_produto, nome_produto, preco) VALUES ('$cod','$nomeProduto','$preco');";
    if(mysqli_query($connect, $sql)):
        header('Location: ../produto.php');
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: ../produto.php');
    endif;
endif;
?>