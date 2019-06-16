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
        <h1>Insira os Dados do Cliente:</h1>
        <form action="index.php" method="post" id="generic_form">
            <input type="hidden" name="action" value="add_confirm">

            <label>Nome:</label>
            <input type="text" name="nome" />
            <br>

            <label>CPF:</label>
            <input type="text" name="cpf" />
            <br>

            <label>Telefone:</label>
            <input type="text" name="tel" />
            <br>

            <label>Endereço:</label>
            <input type="text" name="ende" />
            <br>

            <label>Email:</label>
            <input type="text" name="email" />
            <br>
            
            <label>Senha:</label>
            <input type="password" name="pass" />
            <br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Confirma" />
            <br>
        </form>
    </section>
</main>
<?php include '../view/footer.php'; ?>