<?php include '../view/header.php'; ?>
<main>

    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Lista de Animais:</h1>
    </div>

    <form class="container-fluid" action="." method="post">
        <input type="hidden" name="action"  value="lista_animais_especie">
        <div class="form-group row">
            <label for="campoBuscaPorEspecieAnimal" class="col-form-label col-md-1">Espécie</label>
            <div class="col-md-4 col-sm-6">
                <select name="especie" class="form-control mb-2" id="campoBuscaPorEspecieAnimal">
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
            <button type="submit" class="btn col-md-2 mb-2"
                    style="background-color: #218380; color: white">Listar</button>
        </div>
    </form>

    <form class="container-fluid" action="." method="post">
        <input type="hidden" name="action"  value="lista_animais_cliente">
        <div class="form-group row">
            <label for="campoBuscaPorDonoAnimal" class="col-form-label col-md-1">Cliente</label>
            <div class="col-md-4 col-sm-6">
                <select name="dono" class="form-control mb-2" id="campoBuscaPorDonoAnimal">
                    <?php foreach ($listaC as $cliente) { ?>
                        <option>
                            <?php echo $cliente['nome']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn col-md-2 mb-2"
                    style="background-color: #218380; color: white">Listar</button>
        </div>
    </form>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Nome</th>
                <th>Espécie</th>
                <th>Raça</th>
                <th>Dono/CPF</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $animal) : ?>
                <tr>
                    <td><?php echo $animal['nome']; ?></td>
                    <td><?php echo $animal['especie']; ?></td>
                    <td><?php echo $animal['raca']; ?></td>
                    <td><?php
                        $cliente = get_cliente_by_id($animal['id_cliente']);
                        echo $cliente['nome'];
                        ?> -
                        <?php echo $cliente['CPF']; ?></td>
                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action"
                                   value="altera_func">
                            <input type="hidden" name="nome"
                                   value="<?php echo $animal['nome']; ?>">
                            <input type="hidden" name="especie"
                                   value="<?php echo $animal['especie']; ?>">
                            <input type="hidden" name="raca"
                                   value="<?php echo $animal['raca']; ?>">
                            <input type="hidden" name="id"
                                   value="<?php echo $animal['id']; ?>">
                            <input type="hidden" name="dono"
                                   value="<?php echo $cliente['nome']; ?>">
                            <input type="submit" class="btn btn-secondary btn-sm" value="Alterar">
                        </form>
                    </td>
                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action"
                                   value="remove_func">
                            <input type="hidden" name="id"
                                   value="<?php echo $animal['id']; ?>">
                            <input type="submit" class="btn btn-danger btn-sm" value="Remover">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include '../view/footer.php'; ?>