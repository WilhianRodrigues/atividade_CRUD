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
        <h3 class="light">Lista de Produtos</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Cód.:</th>
                    <th>Produto:</th>
                    <th>Preço:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM produto";
                $resultado = mysqli_query($connect, $sql);
                
                if(mysqli_num_rows($resultado) > 0):
                    
                while($dados = mysqli_fetch_array($resultado)):    
                ?>
                <tr>
                    <td><?php echo $dados['cod_produto'];?></td> 
                    <td><?php echo $dados['nome_produto'];?></td>
                    <td><?php echo "R$ ".$dados['preco'];?></td>
                    <td><a href="editar_produto.php?id=<?php echo $dados['id'];?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                    
                    <td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                    <div id="modal<?php echo $dados['id'];?>" class="modal">
                        <div class="modal-content">
                          <h5>Calma!</h5>
                          <p>Tem certeza que deseja excluir?</p>
                        </div>
                        <div class="modal-footer">
                           <form action="php_action/delete_produto.php" method="POST">
                               <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                               <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                               <a href="#!" class="modal-close waves-effect waves-green btn-flat green">Cancelar</a>
                           </form>
                           
                        </div>
                    </div>
                </tr>
                <?php endwhile;
                else: ?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                <?php
                endif;
                ?>
                
            </tbody>
        </table>
        <br>
        <a href="adicionar_produto.php" class="btn">Cadastrar produto</a>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>