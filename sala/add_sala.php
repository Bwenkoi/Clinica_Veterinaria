<?php include '../view/header.php'; ?>
<main>

    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Insira os Dados da Sala:</h1>
    </div>

    <form class="container-fluid" action="index.php" method="post">
        <input type="hidden" name="action" value="add_confirm">

        <div class="form-group row">
            <label for="campoNumeroSala" class="col-md-1 col-form-label">Número</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoNumeroSala" name="num">
            </div>
        </div>

        <div class="form-group row">
            <label for="campoEquipamentosSala" class="col-md-1 col-form-label">Equipamentos</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoEquipamentosSala" name="equip">
            </div>
        </div>

        <div class="form-group row">
            <label for="campoDescricaoSala" class="col-md-1 col-form-label">Descrição</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoDescricaoSala" name="desc">
            </div>
        </div>

        <div class="form-group row">
            <label for="campoDiponibilidadeSala" class="col-md-1 col-form-label">Diponibilidade</label>
            <div class="col-md-4 col-sm-6">
                <select class="form-control" id="campoDiponibilidadeSala" name="disp">
                    <option>
                        Disponível
                    </option>
                    <option>
                        Indisponível
                    </option>
                </select>
            </div>
        </div>

        <div class="text-right col-md-5 col-sm-6">
            <button type="submit" class="btn col-md-4 col-sm-6"
                    style="background-color: #218380; color: white">Confirmar</button>
        </div>
    </form>
</main>
<?php include '../view/footer.php'; ?>