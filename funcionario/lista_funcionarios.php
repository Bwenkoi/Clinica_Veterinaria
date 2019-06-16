<?php include '../view/header.php'; ?>
<main>
    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Lista de Funcionários:</h1>
    </div>

    <form class="container-fluid" action="." method="post">
        <input type="hidden" name="action"  value="lista_nome">
        <div class="form-group row">
            <label for="campoBuscaPorNomeFuncionario" class="col-md-1 col-form-label">Nome</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" name="nome" class="form-control mb-2" id="campoBuscaPorNomeFuncionario">
            </div>
            <button type="submit" class="btn col-md-2 mb-2"
                    style="background-color: #218380; color: white">Buscar</button>
        </div>
    </form>

    <form class="container-fluid" action="." method="post">
        <input type="hidden" name="action"  value="lista_cargo">
        <div class="form-group row">
            <label for="campoBuscaPorCargoFuncionario" class="col-form-label col-md-1">Cargo</label>
            <div class="col-md-4 col-sm-6">
                <select name="cargo" class="form-control mb-2" id="campoBuscaPorCargoFuncionario">
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
            <button type="submit" class="btn col-md-2 mb-2"
                    style="background-color: #218380; color: white">Listar</button>
        </div>
    </form>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Cargo</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $funcionario) : ?>
                <tr>
                    <td><?php echo $funcionario['nome']; ?></td>
                    <td><?php echo $funcionario['CPF']; ?></td>
                    <td><?php echo $funcionario['cargo']; ?></td>
                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action"
                                   value="altera_func">
                            <input type="hidden" name="nome"
                                   value="<?php echo $funcionario['nome']; ?>">
                            <input type="hidden" name="cpf"
                                   value="<?php echo $funcionario['CPF']; ?>">
                            <input type="hidden" name="cargo"
                                   value="<?php echo $funcionario['cargo']; ?>">
                            <input type="submit" class="btn btn-secondary btn-sm" value="Alterar">
                        </form>
                    </td>
                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action"
                                   value="remove_func">
                            <input type="hidden" name="cpf"
                                   value="<?php echo $funcionario['CPF']; ?>">
                            <input type="submit" class="btn btn-danger btn-sm" value="Remover">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include '../view/footer.php'; ?>