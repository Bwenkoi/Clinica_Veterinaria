<?php
require('../model/database.php');

function cadastra($nome, $cargo, $CPF){
    global $db;
   
    $query = 'INSERT INTO funcionarios
                 (nome, cargo, CPF)
              VALUES
                 (:nome, :cargo, :CPF)';
    $statement = $db->prepare($query);
    $statement->bindValue(':nome', $nome);
    $statement->bindValue(':cargo', $cargo);
    $statement->bindValue(':CPF', $CPF);
    $statement->execute();
    $statement->closeCursor();
}

function lista(){
    global $db;
    $query = 'SELECT * FROM funcionarios'
            . ' ORDER BY cargo';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement; 
}

function lista_nome($nome){
    global $db;
    $query = 'SELECT * FROM funcionarios'
        . ' WHERE nome = :nome';
    $statement = $db->prepare($query);
    $statement->bindValue(':nome', $nome);
    $statement->execute();
    return $statement;
}

function lista_cargo($cargo){
    global $db;
    $query = 'SELECT * FROM funcionarios'
        . ' WHERE cargo = :cargo';
    $statement = $db->prepare($query);
    $statement->bindValue(':cargo', $cargo);
    $statement->execute();
    return $statement;
}

function remover($cpf){
    global $db;
    $query = 'DELETE FROM funcionarios
              WHERE CPF = :cpf';
    $statement = $db->prepare($query);
    $statement->bindValue(':cpf', $cpf);
    $statement->execute();
    $statement->closeCursor();
}

function altera($nome, $cargo, $CPF, $oldCPF){
    global $db;
    $query = 'UPDATE funcionarios
                 SET nome = :nome, cargo = :cargo, CPF = :CPF
              WHERE
                 CPF = :oldCPF';
            
    $statement = $db->prepare($query);
    $statement->bindValue(':nome', $nome);
    $statement->bindValue(':cargo', $cargo);
    $statement->bindValue(':CPF', $CPF);
    $statement->bindValue(':oldCPF', $oldCPF);
    $statement->execute();
    $statement->closeCursor();
}