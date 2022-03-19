<?php
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//Mensagem
include_once 'includes/mensagem.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Produto</h3>
        <form action="php_action/create_produto.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="codigo" id="codigo"> 
                <label for="codigo">Código</label>
            </div>
            
            <div class="input-field col s12">
                <input type="text" name="nomeproduto" id="nomeproduto"> 
                <label for="nomeproduto">Nome do produto</label>
            </div>
            
            <div class="input-field col s12">
                <input type="text" name="preco" id="preco"> 
                <label for="preco">Preço</label>
            </div>
            
            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
        </form>    
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>