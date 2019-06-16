<?php include '../view/header.php'; ?>
<main>
    
    <aside>
        <h1>Controle de Clientes</h1>
        <ul>
            <li>
                <a href="index.php?action=abre_form">Cadastrar Clientes</a>
            </li>
            <li>
                <a href="index.php?action=lista_cliente">Listar Clientes</a>
            </li>
        </ul>
    </aside>
    
    <section>
        <h1>Lista de Clientes</h1>
        <form action="." method="post">
            <input type="hidden" name="action"  value="lista_nome">
            <label>Nome:</label>
            <input type="text" name="nome">
            <input type="submit" value="Buscar">&nbsp;
        </form><br>
        <form action="." method="post">
            <input type="hidden" name="action"  value="lista_cpf">
            <label>CPF.:&nbsp;&nbsp;</label>
            <input type="text" name="cpf">
            <input type="submit" value="Buscar">&nbsp;
        </form><br>
        <table>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Email</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
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
                    <input type="submit" value="Alterar">
                    </form>
                </td>
                <td>
                    <form action="." method="post">
                    <input type="hidden" name="action"
                           value="remove_func">
                    <input type="hidden" name="cpf"
                           value="<?php echo $cliente['CPF']; ?>">
                    <input type="submit" value="Remover">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
</main>
<?php include '../view/footer.php'; ?>