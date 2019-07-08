<?php include '../view/header.php'; ?>

<main>
    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Insira o Medicamento em Estoque:</h1>
    </div>
    <form class="container-fluid" action="index.php" method="post">
        <input type="hidden" name="action" value="add_confirm">
        <div class="form-group row">
            <label for="campoMedicamentoEstoque" class="col-md-1 col-form-label">Medicamento:</label>
            <div class="col-md-4 col-sm-6">
                <select class="form-control" id="campoMedicamentoEstoque" name="medicamento">
                    <?php foreach ($lista as $medicamento) :?>
                    <option>
                        <?php echo $medicamento['nome']; ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="campoLocalEstoque" class="col-form-label col-md-1">Local</label>
            <div class="col-md-4 col-sm-6">
                <select name="local" class="form-control mb-2" id="campoLocalEstoque">
                    <option>
                        Caixa
                    </option>
                    <option>
                        Setor Esquerdo
                    </option>
                    <option>
                        Setor Direito
                    </option>
                    <option>
                        Fundos
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="campoQuantEstoque" class="col-md-1 col-form-label">Quantidade:</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoQuantEstoque" name="quant">
            </div>
        </div>
        <div class="form-group row">
            <label for="campoValoroEstoque" class="col-md-1 col-form-label">Valor(Compra):</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoValorEstoque" name="precoC">
            </div>
        </div>

        <div class="text-right col-md-5 col-sm-6">
            <button type="submit" class="btn col-md-4 col-sm-6"
                    style="background-color: #218380; color: white">Confirma</button>
        </div>
    </form>
</main>

<?php include '../view/footer.php'; ?>