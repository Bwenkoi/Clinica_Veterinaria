<?php include '../view/header.php'; ?>
<main>

    <h1>Insira os Novos Dados:</h1>
        <form action="index.php" method="post" id="generic_form">
            <input type="hidden" name="action" value="confirma_altera">
            <input type="hidden" name="num" value="<?php echo $num ?>">

            <label>Equipamentos:</label>
            <input type="text" name="equip" value="<?php echo $equip ?>"/>
            <br>

            <label>Descrição:</label>
            <input type="text" name="desc" value="<?php echo $desc ?>"/>
            <br>

           <label>Disponível:</label>
            <select name="disp">
                <option>
                    Disponível
                </option>
                <option>
                    Indisponível
                </option>
            </select>
            <br>

            <input type="submit" value="Confirma" />
            <br>
        </form>
    
</main>
<?php include '../view/footer.php'; ?>