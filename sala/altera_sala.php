<?php include '../view/header.php'; ?>
<main>

    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Insira os Novos Dados:</h1>
    </div>
    <form class="container-fluid" action="index.php" method="post">
        <input type="hidden" name="action" value="confirma_altera">
        <input type="hidden" name="num" value="<?php echo $num ?>">

        <div class="form-group row">
            <label for="campoEquipamentosSala" class="col-md-1 col-form-label">Equipamentos</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoEquipamentosSala" name="equip" value="<?php echo $equip ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="campoDescricaoSala" class="col-md-1 col-form-label">Descrição</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoDescricaoSala" name="desc" value="<?php echo $desc ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="campoDispSala" class="col-md-1 col-form-label">Disponibilidade</label>
            <div class="col-md-4 col-sm-6">
                <select class="form-control" id="campoDispSala" name="disp">
                    <option <?php echo $disp == 1 ? ' selected="selected"' : '' ?>>
                        Disponível
                    </option>
                    <option <?php echo $disp == 0 ? ' selected="selected"' : '' ?>>
                        Indisponível
                    </option>
                </select>
            </div>
        </div>

        <div class="text-right col-md-5 col-sm-6">
            <button type="submit" class="btn col-md-4 col-sm-6"
                    style="background-color: #218380; color: white">Confirma</button>
        </div>
    </form>

</main>
<?php include '../view/footer.php'; ?>