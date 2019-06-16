<?php
require('../model/database.php');
require('../model/funcionario_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'abre_controlador';
    }
}  
if ($action == 'abre_controlador'){
    include('controla_funcionario.php');
}

if ($action == 'abre_form') {
    include('add_funcionario.php');
}

if ($action == 'add_confirm') {
    $nome = filter_input(INPUT_POST, 'nome');
    $cargo = filter_input(INPUT_POST, 'cargo');
    $cpf = filter_input(INPUT_POST, 'cpf');
    if($nome == null || $cargo == null || $cpf == null){
        $error = 'Os Campos devem ser Preenchidos!';
        include("../errors/error.php");
    }else{
        cadastra($nome, $cargo, $cpf);
        include('sucesso_add.php');
    }
}

if($action == 'lista_func'){
    $lista = lista();
    include('lista_funcionarios.php');
}

if($action == 'lista_nome'){
    $nome = filter_input(INPUT_POST, 'nome');
    $lista = lista_nome($nome);
    include('lista_funcionarios.php');
}

if($action == 'lista_cargo'){
    $cargo = filter_input(INPUT_POST, 'cargo');
    $lista = lista_cargo($cargo);
    include('lista_funcionarios.php');
}

if ($action == 'altera_func') {
    $nome = filter_input(INPUT_POST, 'nome');
    $cargo = filter_input(INPUT_POST, 'cargo');
    $cpf = filter_input(INPUT_POST, 'cpf');
    include('altera_funcionario.php');
}

if($action == 'confirma_altera'){
    $nome = filter_input(INPUT_POST, 'nome');
    $cargo = filter_input(INPUT_POST, 'cargo');
    $cpf = filter_input(INPUT_POST, 'cpf');
    $oldCPF = filter_input(INPUT_POST, 'oldCPF');
    if($nome == null || $cpf == null){
        $error = 'Os Campos devem ser Preenchidos!';
        include("../errors/error.php");
    }else{
        altera($nome, $cargo, $cpf, $oldCPF);
        header("location: ../funcionario/index.php?action=lista_func");
    }
}

if($action == 'remove_func'){
    $cpf = filter_input(INPUT_POST, 'cpf');
    remover($cpf);
    header("location: ../funcionario/index.php?action=lista_func");
}