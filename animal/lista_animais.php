<?php include '../view/header.php'; ?>

<main>

        <h1>Lista de Animais</h1>

        <form action="." method="post">
            <input type="hidden" name="action"  value="lista_animais_especie">
            <label>Espécie:</label>
            <select name="especie">
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
            <input type="submit" value="Listar">
        </form><br>
        <form action="." method="post">
            <input type="hidden" name="action"  value="lista_animais_cliente">
            <label>Cliente.:&nbsp;</label>
            <select name="dono">
                <?php foreach ($listaC as $cliente){?>
                    <option>
                        <?php echo $cliente['nome'];?>
                    </option>
                <?php } ?>
            </select>
            <input type="submit" value="Listar">
        </form><br>

        <table>
            <tr>
                <th>Nome</th>
                <th>Espécie</th>
                <th>Raça</th>
                <th>Dono/CPF</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($lista as $animal) : ?>
            <tr>
                <td><?php echo $animal['nome']; ?></td>
                <td><?php echo $animal['especie']; ?></td>
                <td><?php echo $animal['raca']; ?></td>
                <td><?php $cliente = get_cliente_by_id($animal['id_cliente']); echo $cliente['nome'];?> -
                    <?php echo $cliente['CPF'];?></td>
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
                    <input type="submit" value="Alterar">
                    </form>
                </td>
                <td>
                    <form action="." method="post">
                    <input type="hidden" name="action"
                           value="remove_func">
                    <input type="hidden" name="id"
                           value="<?php echo $animal['id']; ?>">
                    <input type="submit" value="Remover">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
</main>

<?php include '../view/footer.php'; ?>