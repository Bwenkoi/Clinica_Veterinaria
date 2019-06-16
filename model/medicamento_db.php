<?php
require('../model/database.php');

function cadastra($nome, $tipo, $comp, $lab, $preco){
    global $db;
   
    $query = 'INSERT INTO medicamentos
                 (nome, tipo, comp, lab, preco)
              VALUES
                 (:nome, :tipo, :comp, :lab, :preco)';
    $statement = $db->prepare($query);
    $statement->bindValue(':nome', $nome);
    $statement->bindValue(':tipo', $tipo);
    $statement->bindValue(':comp', $comp);
    $statement->bindValue(':lab', $lab);
    $statement->bindValue(':preco', $preco);
    $statement->execute();
    $statement->closeCursor();
}

function get_medicamento_by_nome($nome){
    global $db;
    $query = 'SELECT * FROM medicamentos'
        . ' WHERE nome = :nome';
    $statement = $db->prepare($query);
    $statement->bindValue(':nome', $nome);
    $statement->execute();
    $statement = $statement->fetch();
    return $statement;
}

function get_medicamento_by_id($id){
    global $db;
    $query = 'SELECT * FROM medicamentos'
        . ' WHERE id_medicamento = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement = $statement->fetch();
    return $statement;
}

function lista(){
    global $db;
    $query = 'SELECT * FROM medicamentos'
            . ' ORDER BY nome';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}

function lista_medicamento_nome($nome){
    global $db;
    $query = 'SELECT * FROM medicamentos'
        . ' WHERE nome = :nome';
    $statement = $db->prepare($query);
    $statement->bindValue(':nome', $nome);
    $statement->execute();
    return $statement;
}

function lista_tipo($tipo){
    global $db;
    $query = 'SELECT * FROM medicamentos'
        . ' WHERE tipo = :tipo'
        . ' ORDER BY tipo';
    $statement = $db->prepare($query);
    $statement->bindValue(':tipo', $tipo);
    $statement->execute();
    return $statement;
}

function lista_lab($lab){
    global $db;
    $query = 'SELECT * FROM medicamentos'
        . ' WHERE lab = :lab'
        . ' ORDER BY lab';
    $statement = $db->prepare($query);
    $statement->bindValue(':lab', $lab);
    $statement->execute();
    return $statement;
}

function altera($id, $nome, $tipo, $comp, $lab, $preco){
    global $db;
    $query = 'UPDATE medicamentos
                 SET nome = :nome, tipo = :tipo, comp = :comp, lab = :lab, preco = :preco
              WHERE
                 id_medicamento = :id';
            
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':nome', $nome);
    $statement->bindValue(':tipo', $tipo);
    $statement->bindValue(':comp', $comp);
    $statement->bindValue(':lab', $lab);
    $statement->bindValue(':preco', $preco);
    $statement->execute();
    $statement->closeCursor();
}

function remover($id){
    global $db;
    $query = 'DELETE FROM medicamentos
              WHERE id_medicamento = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}