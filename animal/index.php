<?php
require('../model/database.php');
require('../model/cliente_db.php');
require('../model/animal_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'abre_controlador';
    }
}  
if ($action == 'abre_controlador'){
    include('controla_animal.php');
}

if ($action == 'abre_form') {
    $lista = lista_cliente();
    include('add_animal.php');
}

if ($action == 'add_confirm') {
    $nome = filter_input(INPUT_POST, 'nome');
    $especie = filter_input(INPUT_POST, 'especie');
    $raca = filter_input(INPUT_POST, 'raca');
    $dono = filter_input(INPUT_POST, 'dono');

    $id_cliente = get_cliente_by_nome($dono);
    
    if($nome == null || $especie == null || $raca == null){
        $error = 'Os Campos devem ser Preenchidos!';
        include("../errors/error.php");
    }else{
        cadastra_animal($nome, $especie, $raca, $id_cliente['ID']);
        include('sucesso_add.php');
    }
}

if($action == 'lista_func'){
    $listaC = lista_cliente();
    $lista = lista_animais();
    include('lista_animais.php');
}

if($action == 'lista_animais_cliente'){
    $dono = filter_input(INPUT_POST, 'dono');
    $cliente = get_cliente_by_nome($dono);
    $listaC = lista_cliente();
    $lista = lista_por_dono($cliente['ID']);
    include('lista_animais.php');
}

if($action == 'lista_animais_especie'){
    $especie = filter_input(INPUT_POST, 'especie');
    $listaC = lista_cliente();
    $lista = lista_por_especie($especie);
    include('lista_animais.php');
}

if ($action == 'altera_func') {
    $nome = filter_input(INPUT_POST, 'nome');
    $especie = filter_input(INPUT_POST, 'especie');
    $raca = filter_input(INPUT_POST, 'raca');
    $id = filter_input(INPUT_POST, 'id');
    include('altera_animais.php');
}

if($action == 'confirma_altera'){
    $nome = filter_input(INPUT_POST, 'nome');
    $especie = filter_input(INPUT_POST, 'especie');
    $raca = filter_input(INPUT_POST, 'raca');
    $id = filter_input(INPUT_POST, 'id');
    
    if($nome == null || $especie == null || $raca == null){
        $error = 'Os Campos devem ser Preenchidos!';
        include("../errors/error.php");
    }else{
        altera_animal($nome, $especie, $raca, $id);
        header("location: ../animal/index.php?action=lista_func");
    }
}

if($action == 'remove_func'){
    $id = filter_input(INPUT_POST, 'id');
    remover_animal($id);
    header("location: ../animal/index.php?action=lista_func");
}