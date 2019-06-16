<?php include '../view/header.php'; ?>
<main>

    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Cliente Cadastrado com Sucesso!</h1>
    </div>
    <ul class="list-group">
        <li class="list-group-item">
            Nome: <?php echo $nome ?>
        </li>
        <li class="list-group-item">
            CPF: <?php echo $cpf ?>
        </li>
        <li class="list-group-item">
            Telefone: <?php echo $telefone ?>
        </li>
        <li class="list-group-item">
            Endereço: <?php echo $endereco ?>
        </li>
        <li class="list-group-item">
            Email: <?php echo $email ?>
        </li>
    </ul>

</main>
<?php include '../view/footer.php'; ?>