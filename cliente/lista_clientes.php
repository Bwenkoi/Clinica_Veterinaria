<?php include '../view/header.php'; ?>
<main>
    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Lista de Clientes:</h1>
    </div>

    <form class="container-fluid" action="." method="post">
        <input type="hidden" name="action"  value="lista_nome">
        <div class="form-group row">
            <label for="campoBuscaPorNomeCliente" class="col-md-1 col-form-label">Nome</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" name="nome" class="form-control mb-2" id="campoBuscaPorNomeCliente">
            </div>
            <button type="submit" class="btn col-md-2 mb-2"
                    style="background-color: #218380; color: white">Buscar</button>
        </div>
    </form>

    <form class="container-fluid" action="." method="post">
        <input type="hidden" name="action"  value="lista_cpf">
        <div class="form-group row">
            <label for="campoBuscaPorCpfCliente" class="col-md-1 col-form-label">CPF</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" name="cpf" class="form-control mb-2" id="campoBuscaPorCpfCliente">
            </div>
            <button type="submit" class="btn col-md-2 mb-2"
                    style="background-color: #218380; color: white">Buscar</button>
        </div>
    </form>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Email</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $cliente) : ?>
                <tr>
                    <td><?php echo $cliente['nome']; ?></td>
                    <td><?php echo $cliente['CPF']; ?></td>
                    <td><?php echo $cliente['telefone']; ?></td>
                    <td><?php echo $cliente['endereco']; ?></td>
                    <td><?php echo $cliente['email']; ?></td>
                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action"
                                   value="altera_func">
                            <input type="hidden" name="nome"
                                   value="<?php echo $cliente['nome']; ?>">
                            <input type="hidden" name="cpf"
                                   value="<?php echo $cliente['CPF']; ?>">
                            <input type="hidden" name="tel"
                                   value="<?php echo $cliente['telefone']; ?>">
                            <input type="hidden" name="ende"
                                   value="<?php echo $cliente['endereco']; ?>">
                            <input type="hidden" name="email"
                                   value="<?php echo $cliente['email']; ?>">
                            <input type="submit" class="btn btn-secondary btn-sm" value="Alterar">
                        </form>
                    </td>
                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action"
                                   value="remove_func">
                            <input type="hidden" name="cpf"
                                   value="<?php echo $cliente['CPF']; ?>">
                            <input type="submit" class="btn btn-danger btn-sm" value="Remover">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include '../view/footer.php'; ?>