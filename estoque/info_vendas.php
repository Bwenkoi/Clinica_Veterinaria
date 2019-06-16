<?php include '../view/header.php'; ?>

<main>
    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Produto: <?php $med = get_medicamento_by_id($id); echo $med['nome']?> </h1>
    </div>

    <form class="container-fluid" action="index.php" method="post">
        <input type="hidden" name="action" value="sell_confirm">
        <input type="hidden" name="id" value="<?php echo $med['id_medicamento'] ?>">
        <input type="hidden" name="nome" value="<?php echo $med['nome'] ?>">
        <input type="hidden" name="preco" value="<?php echo $med['preco'] ?>">

        <div class="form-group row">
            <label for="campoCPFvenda" class="col-md-1 col-form-label">Cliente CPF:</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoCPFvenda" name="cpf">
            </div>
        </div>
        <div class="form-group row">
            <label for="campoQuantVenda" class="col-md-1 col-form-label">Quantidade:</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoQuantVenda" name="quant">
            </div>
        </div>

        <div class="text-right col-md-5 col-sm-6">
            <button type="submit" class="btn col-md-4 col-sm-6"
                    style="background-color: #218380; color: white">Confirma</button>
        </div>
    </form>
</main>
</main>

<?php include '../view/footer.php'; ?>
