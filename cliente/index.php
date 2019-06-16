<?php
require('../model/database.php');
require('../model/cliente_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'abre_controlador';
    }
}  
if ($action == 'abre_controlador'){
    include('controla_cliente.php');
}

if ($action == 'abre_form') {
    include('add_cliente.php');
}

if ($action == 'add_confirm') {
    $nome = filter_input(INPUT_POST, 'nome');
    $cpf = filter_input(INPUT_POST, 'cpf');
    $telefone = filter_input(INPUT_POST, 'tel');
    $endereco = filter_input(INPUT_POST, 'ende');
    $email = filter_input(INPUT_POST, 'email');
    $senha = filter_input(INPUT_POST, 'pass');
    
    if($nome == null || $cpf == null || $telefone == null || $endereco == null
       || $email == null || $senha == null){
        $error = 'Os Campos devem ser Preenchidos!';
        include("../errors/error.php");
    }else{
        cadastra_cliente($nome, $cpf, $telefone, $endereco, $email, $senha);
        include('sucesso_add.php');
    }
}

if($action == 'lista_cliente'){
    $lista = lista_cliente();
    include('lista_clientes.php');
}

if($action == 'lista_nome'){
    $nome = filter_input(INPUT_POST, 'nome');
    $lista = lista_nome($nome);
    include('lista_clientes.php');
}

if($action == 'lista_cpf'){
    $cpf = filter_input(INPUT_POST, 'cpf');
    $lista = lista_cpf($cpf);
    include('lista_clientes.php');
}

if ($action == 'altera_func') {
    $nome = filter_input(INPUT_POST, 'nome');
    $cpf = filter_input(INPUT_POST, 'cpf');
    $telefone = filter_input(INPUT_POST, 'tel');
    $endereco = filter_input(INPUT_POST, 'ende');
    $email = filter_input(INPUT_POST, 'email');
    include('altera_cliente.php');
}

if($action == 'confirma_altera'){
    $nome = filter_input(INPUT_POST, 'nome');
    $cpf = filter_input(INPUT_POST, 'cpf');
    $telefone = filter_input(INPUT_POST, 'tel');
    $endereco = filter_input(INPUT_POST, 'ende');
    $email = filter_input(INPUT_POST, 'email');
    $oldCPF = filter_input(INPUT_POST, 'oldCPF');
    
    if($nome == null || $cpf == null || $telefone == null || $endereco == null){
        $error = 'Os Campos devem ser Preenchidos!';
        include("../errors/error.php");
    }else{
        altera_cliente($nome, $cpf, $telefone, $endereco, $email, $oldCPF);
        header("location: ../cliente/index.php?action=lista_cliente");
    }
}

if($action == 'remove_func'){
    $cpf = filter_input(INPUT_POST, 'cpf');
    remover_cliente($cpf);
    header("location: ../cliente/index.php?action=lista_cliente");
}