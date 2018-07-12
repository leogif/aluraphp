<?php include('cabecalho.php');?>
   
   <header>
        <h3>Preencha o formulário</h3>
   </header>
   <form class="form-horizontal" action="adiciona-produto.php" method="GET">
        <div class="form-group">
            <div class="col-md-x">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome"><br/><br/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-x">
                <label>Preço:</label>
                <input class="form-control" type="number" step="0.01" name="preco"><br/><br/>
            </div>
        </div>
        <div class="form-group">       
            <div class="col-md-x">
                <input class="btn btn-primary btn-lg" type="submit" value="Cadastrar">
            </div>
        </div>
   
   </form> 
<?php include('rodape.php'); ?>