<?php
require('../model/database.php');
require('../model/medicamento_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

if($action == 'abre_form'){
    include('add_medicamento.php');
}

if ($action == 'add_confirm') {
    $nome = filter_input(INPUT_POST, 'nome');
    $tipo = filter_input(INPUT_POST, 'tipo');
    $comp = filter_input(INPUT_POST, 'comp');
    $lab = filter_input(INPUT_POST, 'lab');
    $preco = filter_input(INPUT_POST, 'preco');

    if($nome == null || $tipo == null || $comp == null || $lab == null || $preco == null){
        $error = 'Os Campos devem ser Preenchidos!';
        include("../errors/error.php");
    }else{
        cadastra($nome, $tipo, $comp, $lab, $preco);
        include('sucesso_add.php');
    }
}

if($action == 'lista'){
    $lista = lista();
    include('lista_medicamento.php');
}

if($action == 'lista_nome'){
    $nome = filter_input(INPUT_POST, 'nome');
    $lista = lista_medicamento_nome($nome);
    include('lista_medicamento.php');
}

if($action == 'lista_tipo'){
    $tipo = filter_input(INPUT_POST, 'tipo');
    $lista = lista_tipo($tipo);
    include('lista_medicamento.php');
}

if($action == 'lista_lab'){
    $lab = filter_input(INPUT_POST, 'lab');
    $lista = lista_lab($lab);
    include('lista_medicamento.php');
}

if($action == 'altera_med'){
    $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $tipo = filter_input(INPUT_POST, 'tipo');
    $comp = filter_input(INPUT_POST, 'comp');
    $lab = filter_input(INPUT_POST, 'lab');
    $preco = filter_input(INPUT_POST, 'preco');
    include('altera_medicamento.php');
}

if($action == 'confirma_altera'){
    $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $tipo = filter_input(INPUT_POST, 'tipo');
    $comp = filter_input(INPUT_POST, 'comp');
    $lab = filter_input(INPUT_POST, 'lab');
    $preco = filter_input(INPUT_POST, 'preco');

    altera($id, $nome, $tipo, $comp, $lab, $preco);
    header("location: ../medicamento/index.php?action=lista");
}

if($action == 'remove_med'){
    $id = filter_input(INPUT_POST, 'id');
    remover($id);
    header("location: ../medicamento/index.php?action=lista");
}
