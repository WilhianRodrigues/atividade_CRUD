<?php
//Conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//Mensagem
include_once 'includes/mensagem.php';
?>
<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Cadastro</h3>
        <form action="php_action/create_user.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome"> 
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="email" id="email"> 
                <label for="email">Email</label>
            </div>
            
            <div class="input-field col s12">
                <input type="text" name="senha" id="senha"> 
                <label for="senha">Senha</label>
            </div>
            
            <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
        </form>    
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>