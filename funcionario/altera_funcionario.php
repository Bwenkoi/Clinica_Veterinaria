<?php include '../view/header.php'; ?>
<main>
    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Insira os Novos Dados:</h1>
    </div>
    <form class="container-fluid" action="index.php" method="post">
        <input type="hidden" name="action" value="confirma_altera">
        <input type="hidden" name="oldCPF" value="<?php echo $cpf ?>">
        <div class="form-group row">
            <label for="campoNomeFuncionario" class="col-md-1 col-form-label">Nome</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoNomeFuncionario" name="nome" value="<?php echo $nome ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="campoCpfFuncionario" class="col-md-1 col-form-label">CPF</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoCpfFuncionario" name="cpf" value="<?php echo $cpf ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="campoCargoFuncionario" class="col-md-1 col-form-label">Cargo</label>
            <div class="col-md-4 col-sm-6">
                <select class="form-control" id="campoCargoFuncionario" name="cargo">
                    <option>
                        Veterinário
                    </option>
                    <option>
                        Faxineiro
                    </option>
                    <option>
                        Atendente
                    </option>
                    <option>
                        Gerente
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
