<?php
require('../model/database.php');

function cadastra($num, $equip, $descri, $disp){
    global $db;

    $query = 'INSERT INTO salas
                 (numero, equipamentos, descri, disponivel)
              VALUES
                 (:num, :equip, :descri, :disp)';
    $statement = $db->prepare($query);
    $statement->bindValue(':num', $num);
    $statement->bindValue(':equip', $equip);
    $statement->bindValue(':descri', $descri);
    $statement->bindValue(':disp', $disp);
    $statement->execute();
    $statement->closeCursor();
}

function lista(){
    global $db;
    $query = 'SELECT * FROM salas'
        . ' ORDER BY numero';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}

function lista_por_disp($disp){
    global $db;
    $query = 'SELECT * FROM salas'
        . ' WHERE disponivel = :disp';
    $statement = $db->prepare($query);
    $statement->bindValue(':disp', $disp);
    $statement->execute();
    return $statement;
}

function lista_por_num($num){
    global $db;
    $query = 'SELECT * FROM salas'
        . ' WHERE numero = :num';
    $statement = $db->prepare($query);
    $statement->bindValue(':num', $num);
    $statement->execute();
    return $statement;
}

function altera($num, $equip, $desc, $disp){
    global $db;
    $query = 'UPDATE salas
                 SET equipamentos = :equip, descri = :desc, disponivel = :disp
              WHERE
                 numero = :num';

    $statement = $db->prepare($query);
    $statement->bindValue(':num', $num);
    $statement->bindValue(':equip', $equip);
    $statement->bindValue(':desc', $desc);
    $statement->bindValue(':disp', $disp);
    $statement->execute();
    $statement->closeCursor();
}

function remover_sala($num){
    global $db;
    $query = 'DELETE FROM salas
              WHERE numero = :num';
    $statement = $db->prepare($query);
    $statement->bindValue(':num', $num);
    $statement->execute();
    $statement->closeCursor();
}