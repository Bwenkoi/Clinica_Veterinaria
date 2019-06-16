<?php include '../view/header.php'; ?>

<main>
    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Insira os Dados do Medicamento:</h1>
    </div>
    <form class="container-fluid" action="index.php" method="post">
        <input type="hidden" name="action" value="add_confirm">
        <div class="form-group row">
            <label for="campoNomeMedicamento" class="col-md-1 col-form-label">Nome:</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoNomeMedicamento" name="nome">
            </div>
        </div>
        <div class="form-group row">
            <label for="campoTipoMedicamento" class="col-md-1 col-form-label">Tipo:</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoTipoMedicamentoo" name="tipo">
            </div>
        </div>
        <div class="form-group row">
            <label for="campoCompMedicamento" class="col-md-1 col-form-label">Composição:</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoCompMedicamento" name="comp">
            </div>
        </div>
        <div class="form-group row">
            <label for="campoLabMedicamento" class="col-md-1 col-form-label">Laboratório:</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoLabMedicamento" name="lab">
            </div>
        </div>
        <div class="form-group row">
            <label for="campoPrecoMedicamento" class="col-md-1 col-form-label">Preço:</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoPrecoMedicamento" name="preco">
            </div>
        </div>
        <div class="text-right col-md-5 col-sm-6">
            <button type="submit" class="btn col-md-4 col-sm-6"
                    style="background-color: #218380; color: white">Confirma</button>
        </div>
    </form>
</main>

<?php include '../view/footer.php'; ?>