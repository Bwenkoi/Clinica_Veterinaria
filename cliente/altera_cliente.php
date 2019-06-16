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
        <h1>Insira os Novos Dados:</h1>
        <form action="index.php" method="post" id="generic_form">
            <input type="hidden" name="action" value="confirma_altera">
            <input type="hidden" name="oldCPF" value="<?php echo $cpf ?>">

            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $nome ?>"/>
            <br>

            <label>CPF:</label>
            <input type="text" name="cpf" value="<?php echo $cpf ?>"/>
            <br>

            <label>Telefone:</label>
            <input type="text" name="tel" value="<?php echo $telefone ?>"/>
            <br>

            <label>Endereço:</label>
            <input type="text" name="ende" value="<?php echo $endereco ?>"/>
            <br>
            
            <label>Email:</label>
            <input type="text" name="email" value="<?php echo $email ?>"/>
            <br>
            
            <input type="submit" value="Confirma" />
            <br>
        </form>
    </section>
    
</main>
<?php include '../view/footer.php'; ?>