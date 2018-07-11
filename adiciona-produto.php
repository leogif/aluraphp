<?php 
    require_once('cabecalho.php'); 
    require_once('conn.php'); 
?>

<?php // mysqli_error  
    $nome = $_REQUEST["nome"];
    $preco = $_REQUEST["preco"];              
    $query = "insert into produtos (nome, preco) values ('{$nome}','{$preco}')";
    if(mysqli_query($conn, $query)){ ?>
        <p class="alert-success">O Produto <?= $nome?>, <?= $preco ?> foi adicionado.</p>
    <?php } else { ?>
        <p class="alert-danger">O produto <?= $nome ?> não foi adicionado.</p>
    <?php }
    ?>
        </header>
    </section>
<?php include('rodape.php'); ?> 
