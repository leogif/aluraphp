<?php include('cabecalho.php');?>
   <form action="adiciona-produto.php" method="GET">
    <label for="nome">Nome:</label>
        <input type="text" name="nome"><br/><br/>
    
    <label>Preço:</label>
        <input type="number" step="0.01" name="preco"><br/><br/>
        <input class="btn btn-primary btn-lg" type="submit" value="Cadastrar">
   </form> 
<?php include('rodape.php'); ?>