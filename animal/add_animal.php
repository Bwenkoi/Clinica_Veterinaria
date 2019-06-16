<?php include '../view/header.php'; ?>
<main>
    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Insira os Dados do Animal:</h1>
    </div>
    <form class="container-fluid" action="index.php" method="post">
        <input type="hidden" name="action" value="add_confirm">

        <div class="form-group row">
            <label for="campoNomeAnimal" class="col-md-1 col-form-label">Nome</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoNomeAnimal" name="nome">
            </div>
        </div>

        <div class="form-group row">
            <label for="campoEspecieAnimal" class="col-md-1 col-form-label">Espécie</label>
            <div class="col-md-4 col-sm-6">
                <select class="form-control" id="campoEspecieAnimal" name="especie">
                    <option>
                        Cachorro
                    </option>
                    <option>
                        Gato
                    </option>
                    <option>
                        Pássaro
                    </option>
                    <option>
                        Outro
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="campoRacaAnimal" class="col-md-1 col-form-label">Raça</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoRacaAnimal" name="raca">
            </div>
        </div>

        <div class="form-group row">
            <label for="campoDonoAnimal" class="col-md-1 col-form-label">Dono</label>
            <div class="col-md-4 col-sm-6">
                <select class="form-control" id="campoDonoAnimal" name="dono">
                    <?php foreach ($lista as $cliente) { ?>
                        <option>
                            <?php echo $cliente['nome']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="text-right col-md-5 col-sm-6">
            <button type="submit" class="btn col-md-4 col-sm-6"
                    style="background-color: #218380; color: white">Confirmar</button>
        </div>
        <br>
    </form>
</main>
<?php include '../view/footer.php'; ?>