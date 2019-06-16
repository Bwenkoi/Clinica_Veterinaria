<?php include '../view/header.php'; ?>
<main>

    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Animal Cadastrado com Sucesso!</h1>
    </div>

    <ul class="list-group">
        <li class="list-group-item">
            Nome: <?php echo $nome ?>
        </li>
        <li class="list-group-item">
            Espécie: <?php echo $especie; ?>
        </li>
        <li class="list-group-item">
            Raça: <?php echo $raca; ?>
        </li>
        <li class="list-group-item">
            Dono (Nome e CPF): <?php echo $id_cliente['nome']; ?> - <?php echo $id_cliente['CPF']; ?>
        </li>
    </ul>

</main>
<?php include '../view/footer.php'; ?>