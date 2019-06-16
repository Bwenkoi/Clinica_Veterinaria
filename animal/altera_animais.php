<?php include '../view/header.php'; ?>

<main>

        <h1>Insira os Novos Dados:</h1>
        <form action="index.php" method="post" id="generic_form">
            <input type="hidden" name="action" value="confirma_altera">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            
            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $nome ?>"/>
            <br>

            <label>Espécie:</label>
            <input type="text" name="especie" value="<?php echo $especie ?>"/>
            <br>

            <label>Raça:</label>
            <input type="text" name="raca" value="<?php echo $raca ?>"/>
            <br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Confirma" />
            <br>
        </form>
    
</main>

<?php include '../view/footer.php'; ?>