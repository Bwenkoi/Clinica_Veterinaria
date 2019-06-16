<?php include '../view/header.php'; ?>
<main>

    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Insira os Dados do Cliente:</h1>
    </div>
    <form class="container-fluid" action="index.php" method="post">
        <input type="hidden" name="action" value="add_confirm">

        <div class="form-group row">
            <label for="campoNomeCliente" class="col-md-1 col-form-label">Nome</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoNomeCliente" name="nome">
            </div>
        </div>

        <div class="form-group row">
            <label for="campoCpfCliente" class="col-md-1 col-form-label">CPF</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoCpfCliente" name="cpf">
            </div>
        </div>

        <div class="form-group row">
            <label for="campoTelefoneCliente" class="col-md-1 col-form-label">Telefone</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoTelefoneCliente" name="tel">
            </div>
        </div>

        <div class="form-group row">
            <label for="campoEnderecoCliente" class="col-md-1 col-form-label">Endereço</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" class="form-control" id="campoEnderecoCliente" name="ende">
            </div>
        </div>

        <div class="form-group row">
            <label for="campoEmailCliente" class="col-md-1 col-form-label">Email</label>
            <div class="col-md-4 col-sm-6">
                <input type="email" class="form-control" id="campoEmailCliente" name="email">
            </div>
        </div>

        <div class="form-group row">
            <label for="campoSenhaCliente" class="col-md-1 col-form-label">Senha</label>
            <div class="col-md-4 col-sm-6">
                <input type="password" class="form-control" id="campoSenhaCliente" name="pass">
            </div>
        </div>

        <div class="text-right col-md-5 col-sm-6">
            <button type="submit" class="btn col-md-4 col-sm-6"
                    style="background-color: #218380; color: white">Confirmar</button>
        </div>
    </form>
</main>
<?php include '../view/footer.php'; ?>