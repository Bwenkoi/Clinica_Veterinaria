<?php include '../view/header.php'; ?>

<main>
    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Medicamento inserido no estoque!</h1>
    </div>
    <ul class="list-group">
        <li class="list-group-item">
            Nome: <?php echo $medicamento ?>
        </li>
        <li class="list-group-item">
            Local: <?php echo $local ?>
        </li>
        <li class="list-group-item">
            Quantidade: <?php echo $quant ?>
        </li>
        <li class="list-group-item">
            Preço de Compra: <?php echo $preco ?>
        </li>
    </ul>
</main>

<?php include '../view/footer.php'; ?>