<?php include '../view/header.php'; ?>
<main>
        <h1>Insira os Dados da Sala:</h1>
        <form action="index.php" method="post" id="generic_form">
            <input type="hidden" name="action" value="add_confirm">

            <label>Número:</label>
            <input type="text" name="num" />
            <br>

            <label>Equipamentos:</label>
            <input type="text" name="equip" />
            <br>

            <label>Descrição:</label>
            <input type="text" name="desc" />
            <br>

            <label>Diponibilidade:</label>
            <select name="disp">
                <option>
                    Disponível
                </option>
                <option>
                    Indisponível
                </option>
            </select>
            <br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Confirma" />
            <br>
        </form>

</main>
<?php include '../view/footer.php'; ?>