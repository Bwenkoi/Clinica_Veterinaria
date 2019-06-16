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
    <h1>Cliente Cadastrado com Sucesso!</h1>
    <ul>
        <li>
            Nome: <?php echo $nome ?>
        </li>
        <li>
            CPF: <?php echo $cpf ?>
        </li>
        <li>
            Telefone: <?php echo $telefone ?>
        </li>
        <li>
            Endereço: <?php echo $endereco ?>
        </li>
        <li>
            Email: <?php echo $email ?>
        </li>
    </ul>
    </section>
    
</main>
<?php include '../view/footer.php'; ?>