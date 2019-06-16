<?php include '../view/header.php'; ?>
<main>
    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Funcionário cadastrado com sucesso!</h1>
    </div>
    <ul class="list-group">
        <li class="list-group-item">
            Nome: <?php echo $nome ?>
        </li>
        <li class="list-group-item">
            CPF: <?php echo $cpf ?>
        </li>
        <li class="list-group-item">
            Cargo: <?php echo $cargo ?>
        </li>
    </ul>
</main>
<?php include '../view/footer.php'; ?>