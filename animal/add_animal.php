<?php include '../view/header.php'; ?>
<main>

        <h1>Insira os Dados do Animal:</h1>
        <form action="index.php" method="post" id="generic_form">
            <input type="hidden" name="action" value="add_confirm">

            <label>Nome:</label>
            <input type="text" name="nome" />
            <br>

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
            <br>

            <label>Raça:</label>
            <input type="text" name="raca" />
            <br>

            <label>Dono:</label>
            <select name="dono">
                <?php foreach ($lista as $cliente){?>
                <option>
                    <?php echo $cliente['nome'];?>
                </option>
                <?php } ?>
            </select>
            <br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Confirma" />
            <br>
        </form>
</main>

<?php include '../view/footer.php'; ?>