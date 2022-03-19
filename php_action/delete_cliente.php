<?php
//Sessão
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
    
    
    $id = mysqli_escape_string($connect,$_POST['id']);
    
    $sql = "DELETE FROM clientes WHERE id = '$id';";
    
    if(mysqli_query($connect, $sql)):
        header('Location: ../clientes.php');
        $_SESSION['mensagem'] = "Excluído com sucesso!";
    else:
        $_SESSION['mensagem'] = "Erro ao excluir";
        header('Location: ../clientes.php');
    endif;
endif;
?>
