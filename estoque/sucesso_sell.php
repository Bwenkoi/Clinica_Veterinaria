<?php include '../view/header.php'; ?>

<main>
    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Venda Executada com Sucesso!</h1>
    </div>
    <ul class="list-group">
        <li class="list-group-item">
            Produto: <?php echo $nome ?>
        </li>
        <li class="list-group-item">
            Preço do produto: <?php echo $preco ?>
        </li>
        <li class="list-group-item">
            Quantidade: <?php echo $quant ?>
        </li>
        <li class="list-group-item">
            Valor Total da Compra: <?php echo $preco*$quant ?>
        </li>
        <li class="list-group-item">
            Cliente: <?php echo $cliente['nome'] ?>
        </li>
    </ul>
</main>

<?php include '../view/footer.php'; ?>