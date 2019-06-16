<?php include '../view/header.php'; ?>

<main>
    <div class="tituloPaginaEntidade col-md-5 col-sm-6">
        <h1 class="h3">Lista de Produtos:</h1>
    </div>

    <form class="container-fluid" action="." method="post">
        <input type="hidden" name="action"  value="lista_nome">
        <div class="form-group row">
            <label for="campoBuscaPorNomeEstoque" class="col-md-1 col-form-label">Produto:</label>
            <div class="col-md-4 col-sm-6">
                <input type="text" name="nome" class="form-control mb-2" id="campoBuscaPorNomeEstoque">
            </div>
            <button type="submit" class="btn col-md-2 mb-2"
                    style="background-color: #218380; color: white">Buscar</button>
        </div>
    </form>

    <form class="container-fluid" action="." method="post">
        <input type="hidden" name="action"  value="lista_local">
        <div class="form-group row">
            <label for="campoBuscaPorLocalEstoque" class="col-form-label col-md-1">Local:</label>
            <div class="col-md-4 col-sm-6">
                <select name="local" class="form-control mb-2" id="campoBuscaPorLocalEstoque">
                    <option>
                        Caixa
                    </option>
                    <option>
                        Setor Esquerdo
                    </option>
                    <option>
                        Setor Direito
                    </option>
                    <option>
                        Fundos
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
                <th scope="col">Medicamento</th>
                <th scope="col">Local</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço de Compra (R$)</th>
                <th scope="col">Preço de Venda (R$)</th>
                <th scope="col">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as $prod) : ?>
                <tr>
                    <td><?php $med = get_medicamento_by_id($prod['id_medicamento']);
                              echo $med['nome']?></td>
                    <td><?php echo $prod['local']; ?></td>
                    <td><?php echo $prod['quant']; ?></td>
                    <td><?php echo $prod['precoC']; ?></td>
                    <td><?php echo $med['preco']; ?></td>
                    <td>
                        <form action="." method="post">
                            <input type="hidden" name="action"
                                   value="realiza_venda">
                            <input type="hidden" name="medicamento"
                                   value="<?php echo $med['id_medicamento']; ?>">
                            <input type="submit" class="btn btn-secondary btn-sm" value="Vender">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php include '../view/footer.php'; ?>