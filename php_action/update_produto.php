<?php
//Sessão
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $cod = mysqli_escape_string($connect,$_POST['codigo']);
    $nomeProduto = mysqli_escape_string($connect,$_POST['nomeproduto']);
    $preco = mysqli_escape_string($connect,$_POST['preco']);
    
    $id = mysqli_escape_string($connect,$_POST['id']);
    
    $sql = "UPDATE produto SET cod_produto = '$cod', nome_produto = '$nomeProduto', preco = '$preco' WHERE id = '$id';";
    if(mysqli_query($connect, $sql)):
        header('Location: ../produto.php?');
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar";
        header('Location: ../produto.php?');
    endif;
endif;
?>
