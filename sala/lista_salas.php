<?php include '../view/header.php'; ?>
<main>
        <h1>Lista de Salas</h1>

        <form action="." method="post">
            <input type="hidden" name="action"  value="lista_disp">
            <label>Disponíb:</label>
            <select name="disp">
                <option>
                    Disponível
                </option>
                <option>
                    Indisponível
                </option>
            </select>
            <input type="submit" value="Listar">
        </form><br>
        <form action="." method="post"">
            <input type="hidden" name="action"  value="lista_num">
            <label>Número:</label>
            <input type="text" name="num">
            <input type="submit" value="Buscar">
        </form><br>

        <table>
            <tr>
                <th>N°</th>
                <th>Equipamentos</th>
                <th>Descrição</th>
                <th>Diponibilidade</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($lista as $sala) : ?>
            <tr>
                <td><?php echo $sala['numero']; ?></td>
                <td><?php echo $sala['equipamentos']; ?></td>
                <td><?php echo $sala['descri']; ?></td>
                <td><?php if($sala['disponivel']==1) echo 'Disponível';
                          else echo 'Indisponível';?></td>
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
                           value="<?php echo $sala['disponivel'];?>">
                    <input type="submit" value="Alterar">
                    </form>
                </td>
                <td>
                    <form action="." method="post">
                    <input type="hidden" name="action"
                           value="remover">
                    <input type="hidden" name="num"
                           value="<?php echo $sala['numero']; ?>">
                    <input type="submit" value="Remover">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
</main>
<?php include '../view/footer.php'; ?>