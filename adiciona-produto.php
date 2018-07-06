<?php 
    require_once('cabecalho.php'); 
    require_once('conn.php');
    $nome = $_REQUEST["nome"];
    $preco = $_REQUEST["preco"];              
    $query = "insert into produtos (nome, preco) values ($nome, $preco)";
    mysqli_query($conn, $query) or die("Erro ao tentar cadastrar registro"); 
    mysqli_close($conn);
?>            
            <p class="alert-success">Produto <?= $nome; ?> <?= $preco; ?> adicionado com sucesso!</p>
        </header>
    </section>
<?php include('rodape.php