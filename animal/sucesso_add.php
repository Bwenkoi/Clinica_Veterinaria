<?php include '../view/header.php'; ?>

<main>

    <h1>Animal Cadastrado com Sucesso!</h1>
    <ul>
        <li>
            Nome: <?php echo $nome; ?>
        </li>
        <li>
            Espécie: <?php echo $especie; ?>
        </li>
        <li>
            Raça: <?php echo $raca; ?>
        </li>
        <li>
            Dono (Nome e CPF): <?php echo $id_cliente['nome']; ?> - <?php echo $id_cliente['CPF'];?>
        </li>
    </ul>
    
</main>

<?php include '../view/footer.php'; ?>