<?php include '../view/header.php'; ?>
<main>

    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Lista de Salas:</h1>
    </div>

    <form class="container-fluid" action="." method="post">
        <input type="hidden" name="action"  value="lista_disp">
        <div class="form-group row">
            <label for="campoBuscaDispSala" class="col-form-label col-md-1">Disponibilidade</label>
            <div class="col-md-4 col-sm-6">
                <select name="disp" class="form-control mb-2" id="campoBuscaDispSala">
                    <option>
                        Disponível
                    </option>
                    <option>
                        Indisponível
                    </option>
                </select>
            </div>
            <button type="submit" class="btn col-md-2 mb-2"
                    style="background-color: #218380; color: white">Listar</button>
        </div>
    </form>

    <form class="container-fluid" action="." method="post">
        <input type="hidden" name="action"  value="lista_num">
        <div class="form-group row">
            <label for="campoBuscaNumSala" class="col-md-1 col-form-label">Número</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" name="num" class="form-control mb-2" id="campoBuscaNumSala">
            </div>
            <button type="submit" class="btn col-md-2 mb-2"
                    style="background-color: #218380; color: white">Buscar</button>
        </div>
    </form>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>N°</th>
                <th>Equipamentos</th>
                <th>Descrição</th>
                <th>Diponibilidade</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $sala) : ?>
                <tr>
                    <td><?php echo $sala['numero']; ?></td>
                    <td><?php echo $sala['equipamentos']; ?></td>
                    <td><?php echo $sala['descri']; ?></td>
                    <td><?php
                        if ($sala['disponivel'] == 1)
                            echo 'Disponível';
                        else
                            echo 'Indisponível';
                        ?></td>
                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action"
                                   value="altera">
                            <input type="hidden" name="num"
                                   value="<?php echo $sala['numero']; ?>">
                            <input type="hidden" name="equip"
                                   value="<?php echo $sala['equipamentos']; ?>">
                            <input type="hidden" name="desc"
                                   value="<?php echo $sala['descri']; ?>">
                            <input type="hidden" name="disp"
                                   value="<?php echo $sala['disponivel']; ?>">
                            <input type="submit" class="btn btn-secondary btn-sm" value="Alterar">
                        </form>
                    </td>
                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action"
                                   value="remover">
                            <input type="hidden" name="num"
                                   value="<?php echo $sala['numero']; ?>">
                            <input type="submit" class="btn btn-danger btn-sm" value="Remover">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include '../view/footer.php'; ?>