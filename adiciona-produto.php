<?php 
    require_once('cabecalho.php'); 
    require_once('conn.php'); 
?>

<?php // mysqli_error  
    function insereProduto($conn, $nome, $preco){
        $query = "insert into produtos (nome, preco) values ('{$nome}','{$preco}')";
        return mysqli_query($conn, $query)    
    }  
    
    $nome = $_REQUEST["nome"];
    $preco = $_REQUEST["preco"];              
    
    $resultadoDaInsercao = mysqli_query($conn, $query);
    if(insereProduto($conn, $nome, $preco)){ ?>
        <p class="alert-success">O Produto <?= $nome?>, <?= $preco ?> foi adicionado.</p>
    <?php } else { ?>
        <p class="alert-danger">O produto <?= $nome ?> não foi adicionado.</p>
    <?php }
    ?>
        </header>
    </section>
<?php include('rodape.php'); ?> 
