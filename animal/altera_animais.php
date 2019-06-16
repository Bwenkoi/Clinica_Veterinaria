<?php include '../view/header.php'; ?>
<main>
    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Insira os Novos Dados:</h1>
    </div>
    <form class="container-fluid" action="index.php" method="post">
        <input type="hidden" name="action" value="confirma_altera">
        <input type="hidden" name="id" value="<?php echo $id ?>">

        <div class="form-group row">
            <label for="campoNomeAnimal" class="col-md-1 col-form-label">Nome</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoNomeAnimal" name="nome" value="<?php echo $nome ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="campoEspecieAnimal" class="col-md-1 col-form-label">Espécie</label>
            <div class="col-md-4 col-sm-6">
                <select class="form-control" id="campoEspecieAnimal" name="especie">
                    <option <?php echo $especie == 'Cachorro' ? ' selected="selected"' : '' ?>>
                        Cachorro
                    </option>
                    <option <?php echo $especie == 'Gato' ? ' selected="selected"' : '' ?>>
                        Gato
                    </option>
                    <option <?php echo $especie == 'Pássaro' ? ' selected="selected"' : '' ?>>
                        Pássaro
                    </option>
                    <option <?php echo $especie == 'Outro' ? ' selected="selected"' : '' ?>>
                        Outro
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="campoRacaAnimal" class="col-md-1 col-form-label">Raça</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoRacaAnimal" name="raca" value="<?php echo $raca ?>">
            </div>
        </div>

        <div class="text-right col-md-5 col-sm-6">
            <button type="submit" class="btn col-md-4 col-sm-6"
                    style="background-color: #218380; color: white">Confirma</button>
        </div>
    </form>

</main>
<?php include '../view/footer.php'; ?>