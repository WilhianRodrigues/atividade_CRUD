<?php
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//Mensagem
include_once 'includes/mensagem.php';
//Select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql= "SELECT * FROM produto WHERE id = '$id';";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Prodtuto</h3>
        <form action="php_action/update_produto.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
            <div class="input-field col s12">
                <input type="text" name="codigo" id="codigo" value="<?php echo $dados['cod_produto'];?>"> 
                <label for="codigo">Código</label>
            </div>
            
            <div class="input-field col s12">
                <input type="text" name="nomeproduto" id="nomeproduto" value="<?php echo $dados['nome_produto'];?>"> 
                <label for="nomeproduto">Nome produto</label>
            </div>
            
            <div class="input-field col s12">
                <input type="text" name="preco" id="preco" value="<?php echo $dados['preco'];?>"> 
                <label for="preco">Preço</label>
            </div>
  
            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="produto.php" class="btn green">Lista de Produtos</a>
        </form>    
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>
