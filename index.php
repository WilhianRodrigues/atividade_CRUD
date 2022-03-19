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
        <h3 class="light">Login</h3>
        <form action="php_action/logar.php" method="POST">
       
            <div class="input-field col s12">
                <input type="text" name="email" id="email"> 
                <label for="email">Email</label>
            </div>
          
            <div class="input-field col s12">
                <input type="text" name="senha" id="senha"> 
                <label for="senha">Senha</label>
            </div>
            <button type="submit" name="btn-login" class="btn">Login</button>
            <a href="cadastro.php" class="btn green">Cadastrar</a>
                        
        </form>    
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>