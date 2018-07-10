<?php 
    require_once('cabecalho.php'); 
    require_once('conn.php'); 
?>

<?php // mysqli_error  
    $nome = $_REQUEST["nome"];
    $preco = $_REQUEST["preco"];              
    $query = "insert into produtos (nome, preco) values ('$nome','$preco')";
    if(mysqli_query($conn, $query)){
        echo "Sucesso";
    } else {
        echo("Error description: " . mysqli_error());
    }
?>
        </header>
    </section>
<?php include('rodape.php'); ?> 
