<?php include '../view/header.php'; ?>

<main>
    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Medicamento cadastrado com sucesso!</h1>
    </div>
    <ul class="list-group">
        <li class="list-group-item">
            Nome: <?php echo $nome ?>
        </li>
        <li class="list-group-item">
            Tipo: <?php echo $tipo ?>
        </li>
        <li class="list-group-item">
            Composição: <?php echo $comp ?>
        </li>
        <li class="list-group-item">
            Laboratório: <?php echo $lab ?>
        </li>
        <li class="list-group-item">
            Preço de Venda: <?php echo $preco ?>
        </li>
    </ul>
</main>

<?php include '../view/footer.php'; ?>