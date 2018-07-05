<?php include('cabecalho.php'); ?>
            <?php
                $nome = $_REQUEST['nome'];
                $preco = $_REQUEST['preco'];
            ?>
            <p class="alert-success">Produto <?= $nome; ?> <?= $preco; ?> adicionado com sucesso!</p>
        </header>
    </section>
<?php include('rodape.php'); ?>