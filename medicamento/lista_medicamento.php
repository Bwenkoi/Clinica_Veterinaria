<?php include '../view/header.php'; ?>
<main>
    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Lista de Medicamentos:</h1>
    </div>

    <form class="container-fluid" action="." method="post">
        <input type="hidden" name="action"  value="lista_nome">
        <div class="form-group row">
            <label for="campoBuscaPorNomeMedicamento" class="col-md-1 col-form-label">Nome:</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" name="nome" class="form-control mb-2" id="campoBuscaPorNomeMedicamento">
            </div>
            <button type="submit" class="btn col-md-2 mb-2"
                    style="background-color: #218380; color: white">Buscar</button>
        </div>
    </form>

    <form class="container-fluid" action="." method="post">
        <input type="hidden" name="action"  value="lista_tipo">
        <div class="form-group row">
            <label for="campoBuscaPorTipoMedicamento" class="col-md-1 col-form-label">Tipo:</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" name="tipo" class="form-control mb-2" id="campoBuscaPorTipoMedicamento">
            </div>
            <button type="submit" class="btn col-md-2 mb-2"
                    style="background-color: #218380; color: white">Buscar</button>
        </div>
    </form>

    <form class="container-fluid" action="." method="post">
        <input type="hidden" name="action"  value="lista_lab">
        <div class="form-group row">
            <label for="campoBuscaPorLabMedicamento" class="col-md-1 col-form-label">Laboratório:</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" name="lab" class="form-control mb-2" id="campoBuscaPorLabMedicamento">
            </div>
            <button type="submit" class="btn col-md-2 mb-2"
                    style="background-color: #218380; color: white">Buscar</button>
        </div>
    </form>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Tipo</th>
                <th scope="col">Composição</th>
                <th scope="col">Laboratório</th>
                <th scope="col">Preço (R$)</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $medicamento) : ?>
                <tr>
                    <td><?php echo $medicamento['id_medicamento']; ?></td>
                    <td><?php echo $medicamento['nome']; ?></td>
                    <td><?php echo $medicamento['tipo']; ?></td>
                    <td><?php echo $medicamento['comp']; ?></td>
                    <td><?php echo $medicamento['lab']; ?></td>
                    <td><?php echo $medicamento['preco']; ?></td>
                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action"
                                   value="altera_med">
                            <input type="hidden" name="id"
                                   value="<?php echo $medicamento['id_medicamento']; ?>">
                            <input type="hidden" name="nome"
                                   value="<?php echo $medicamento['nome']; ?>">
                            <input type="hidden" name="tipo"
                                   value="<?php echo $medicamento['tipo']; ?>">
                            <input type="hidden" name="comp"
                                   value="<?php echo $medicamento['comp']; ?>">
                            <input type="hidden" name="lab"
                                   value="<?php echo $medicamento['lab']; ?>">
                            <input type="hidden" name="preco"
                                   value="<?php echo $medicamento['preco']; ?>">
                            <input type="submit" class="btn btn-secondary btn-sm" value="Alterar">
                        </form>
                    </td>
                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action"
                                   value="remove_med">
                            <input type="hidden" name="id"
                                   value="<?php echo $medicamento['id_medicamento']; ?>">
                            <input type="submit" class="btn btn-danger btn-sm" value="Remover">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include '../view/footer.php'; ?>