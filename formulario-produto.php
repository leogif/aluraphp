<?php include('cabecalho.php');?>
   <form action="adiciona-produto.php" method="GET">
    <label for="nome">Nome:</label>
        <input type="text" name="nome"><br/><br/>
    
    <label>Preço:</label>
        <input type="text" name="preco"><br/><br/>
        <input type="submit" value="Cadastrar">
   </form> 
<?php include('rodape.php'); ?>