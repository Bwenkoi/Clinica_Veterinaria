<?php
require('../model/database.php');

function cadastra_animal($nome, $especie, $raca, $id_cliente){
    global $db;
   
    $query = 'INSERT INTO animais
                 (nome, especie, raca, id_cliente)
              VALUES
                 (:nome, :especie, :raca, :id_cliente)';
    $statement = $db->prepare($query);
    $statement->bindValue(':nome', $nome);
    $statement->bindValue(':especie', $especie);
    $statement->bindValue(':raca', $raca);
    $statement->bindValue(':id_cliente', $id_cliente);
    $statement->execute();
    $statement->closeCursor();
}

function lista_animais(){
    global $db;
    $query = 'SELECT * FROM animais'
           . ' ORDER BY id_cliente';
    $statement = $db->prepare($query);
    $statement->execute();
    $animais = $statement->fetchAll();
    $statement->closeCursor();
    return $animais; 
}

function lista_por_especie($especie){
    global $db;
    $query = 'SELECT * FROM animais'
        . ' WHERE especie = :especie';
    $statement = $db->prepare($query);
    $statement->bindValue(':especie', $especie);
    $statement->execute();
    $animais = $statement->fetchAll();
    $statement->closeCursor();
    return $animais;
}

function lista_por_dono($id){
    global $db;
    $query = 'SELECT * FROM animais'
        . ' WHERE id_cliente = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $animais = $statement->fetchAll();
    $statement->closeCursor();
    return $animais;
}

function altera_animal($nome, $especie, $raca, $id){
    global $db;
    $query = 'UPDATE animais
                 SET nome = :nome, especie = :especie, raca = :raca
              WHERE
                 id= :id';
            
    $statement = $db->prepare($query);
    $statement->bindValue(':nome', $nome);
    $statement->bindValue(':especie', $especie);
    $statement->bindValue(':raca', $raca);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}

function remover_animal($id){
    global $db;
    $query = 'DELETE FROM animais
              WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}