<?php
require('../model/database.php');

function cadastra_cliente($nome, $CPF, $telefone, $endereco, $email, $senha){
    global $db;
   
    $query = 'INSERT INTO clientes
                 (nome, CPF, telefone, endereco, email, password)
              VALUES
                 (:nome, :CPF, :telefone, :endereco, :email, :senha)';
    $statement = $db->prepare($query);
    $statement->bindValue(':nome', $nome);
    $statement->bindValue(':CPF', $CPF);
    $statement->bindValue(':telefone', $telefone);
    $statement->bindValue(':endereco', $endereco);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':senha', $senha);
    $statement->execute();
    $statement->closeCursor();
}

function get_cliente_by_nome($nome){
    global $db;
    $query = 'SELECT * FROM clientes'
           . ' WHERE nome = :nome';
    $statement = $db->prepare($query);
    $statement->bindValue(':nome', $nome);
    $statement->execute();
    $cliente = $statement->fetch();
    $statement->closeCursor();
    return $cliente; 
}

function get_cliente_by_CPF($CPF){
    global $db;
    $query = 'SELECT * FROM clientes'
        . ' WHERE CPF = :CPF';
    $statement = $db->prepare($query);
    $statement->bindValue(':CPF', $CPF);
    $statement->execute();
    $cliente = $statement->fetch();
    $statement->closeCursor();
    return $cliente;
}

function get_cliente_by_id($id){
    global $db;
    $query = 'SELECT * FROM clientes'
           . ' WHERE ID = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $cliente = $statement->fetch();
    $statement->closeCursor();
    return $cliente; 
}

function lista_cliente(){
    global $db;
    $query = 'SELECT * FROM clientes'
           . ' ORDER BY nome';
    $statement = $db->prepare($query);
    $statement->execute();
    $clientes = $statement->fetchAll();
    $statement->closeCursor();
    return $clientes; 
}

function lista_nome($nome){
    global $db;
    $query = 'SELECT * FROM clientes'
        . ' WHERE nome = :nome';
    $statement = $db->prepare($query);
    $statement->bindValue(':nome', $nome);
    $statement->execute();
    $clientes = $statement->fetchAll();
    $statement->closeCursor();
    return $clientes;
}

function lista_cpf($cpf){
    global $db;
    $query = 'SELECT * FROM clientes'
        . ' WHERE CPF = :cpf';
    $statement = $db->prepare($query);
    $statement->bindValue(':cpf', $cpf);
    $statement->execute();
    $clientes = $statement->fetchAll();
    $statement->closeCursor();
    return $clientes;
}

function remover_cliente($cpf){
    global $db;
    $query = 'DELETE FROM clientes
              WHERE CPF = :cpf';
    $statement = $db->prepare($query);
    $statement->bindValue(':cpf', $cpf);
    $statement->execute();
    $statement->closeCursor();
}

function altera_cliente($nome, $CPF, $telefone, $endereco, $email, $oldCPF){
    global $db;
    $query = 'UPDATE clientes
                 SET nome = :nome, CPF = :CPF, telefone = :telefone, endereco = :endereco, email = :email
              WHERE
                 CPF = :oldCPF';
            
    $statement = $db->prepare($query);
    $statement->bindValue(':nome', $nome);
    $statement->bindValue(':CPF', $CPF);
    $statement->bindValue(':telefone', $telefone);
    $statement->bindValue(':endereco', $endereco);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':oldCPF', $oldCPF);
    $statement->execute();
    $statement->closeCursor();
}