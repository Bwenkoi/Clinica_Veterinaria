<?php
require('../model/database.php');

function insere($id, $local, $quant, $preco){
    global $db;

    $query = 'INSERT INTO estoque
                 (id_medicamento, local, quant, precoC)
              VALUES
                 (:id, :local, :quant, :preco)';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':local', $local);
    $statement->bindValue(':quant', $quant);
    $statement->bindValue(':preco', $preco);
    $statement->execute();
    $statement->closeCursor();
}

function lista_estoque(){
    global $db;
    $query = 'SELECT * FROM estoque'
        . ' ORDER BY local';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}

function lista_estoque_local($local){
    global $db;
    $query = 'SELECT * FROM estoque'
        . ' WHERE local = :local;';
    $statement = $db->prepare($query);
    $statement->bindValue(':local', $local);
    $statement->execute();
    return $statement;
}

function lista_estoque_id($id){
    global $db;
    $query = 'SELECT * FROM estoque'
        . ' WHERE id_medicamento = :id;';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    return $statement;
}

function dar_baixa_estoque($id, $novoQuant){
    global $db;
    $query = 'UPDATE estoque
                 SET quant = :novoQuant
              WHERE
                 id_medicamento = :id';

    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':novoQuant', $novoQuant);
    $statement->execute();
    $statement->closeCursor();
}

function cria_venda($id, $cpf, $quant, $total){
    global $db;

    $query = 'INSERT INTO venda
                 (id_medicamento, quant, total, cpf)
              VALUES
                 (:id, :quant, :total, :cpf)';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':quant', $quant);
    $statement->bindValue(':total', $total);
    $statement->bindValue(':cpf', $cpf);
    $statement->execute();
    $statement->closeCursor();
}