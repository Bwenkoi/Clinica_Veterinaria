<?php include '../view/header.php'; ?>
<main>
    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Sala cadastrada com sucesso!</h1>
    </div>

    <ul class="list-group">
        <li class="list-group-item">
            Número: <?php echo $num ?>
        </li>
        <li class="list-group-item">
            Equipamentos: <?php echo $equip ?>
        </li>
        <li class="list-group-item">
            Descrição: <?php echo $desc ?>
        </li>
        <li class="list-group-item">
            Disponibilidade: <?php echo $disp ?>
        </li>
    </ul>
</main>
<?php include '../view/footer.php'; ?>