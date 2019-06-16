<?php
require('../model/database.php');
require('../model/sala_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'abre_controlador';
    }
}  
if ($action == 'abre_controlador'){
    include('controla_sala.php');
}

if ($action == 'abre_form') {
    include('add_sala.php');
}

if ($action == 'add_confirm') {
    $num = filter_input(INPUT_POST, 'num', FILTER_VALIDATE_INT);
    $equip = filter_input(INPUT_POST, 'equip');
    $desc = filter_input(INPUT_POST, 'desc');
    $disp = filter_input(INPUT_POST, 'disp');
    if(is_int($num) == false){
        $error = 'O Número deve ser um Inteiro!';
        include("../errors/error.php");
    }
    else if($num == null || $equip == null || $desc == null){
        $error = 'Os Campos devem ser Preenchidos!';
        include("../errors/error.php");
    }else{
        if($disp == 'Disponível'){
            cadastra($num, $equip, $desc, true);
            include('sucesso_add.php');
        }
        else {
            cadastra($num, $equip, $desc, false);
            include('sucesso_add.php');
        }
    }
}

if($action == 'lista'){
    $lista = lista();
    include('lista_salas.php');
}

if($action == 'lista_disp'){
    $disp = filter_input(INPUT_POST, 'disp');
    if($disp == 'Disponível'){
        $lista = lista_por_disp(true);
        include('lista_salas.php');
    }
    else {
        $lista = lista_por_disp(false);
        include('lista_salas.php');
    }
}

if($action == 'lista_num'){
    $num = filter_input(INPUT_POST, 'num', FILTER_VALIDATE_INT);
    $lista = lista_por_num($num);
    include('lista_salas.php');
}

if($action == 'altera'){
    $num = filter_input(INPUT_POST, 'num', FILTER_VALIDATE_INT);
    $equip = filter_input(INPUT_POST, 'equip');
    $desc = filter_input(INPUT_POST, 'desc');
    $disp = filter_input(INPUT_POST, 'disp');
    include('altera_sala.php');
}

if($action == 'confirma_altera'){
    $num = filter_input(INPUT_POST, 'num', FILTER_VALIDATE_INT);
    $equip = filter_input(INPUT_POST, 'equip');
    $desc = filter_input(INPUT_POST, 'desc');
    $disp = filter_input(INPUT_POST, 'disp');
    if($equip == null || $desc == null){
        $error = 'Os Campos devem ser Preenchidos!';
        include("../errors/error.php");
    }else {
        if ($disp == 'Disponível') {
            altera($num, $equip, $desc, true);
            header("location: ../sala/index.php?action=lista");
        }
        else {
            altera($num, $equip, $desc, false);
            header("location: ../sala/index.php?action=lista");
        }
    }
}

if($action == 'remover'){
    $num = filter_input(INPUT_POST, 'num', FILTER_VALIDATE_INT);
    remover_sala($num);
    header("location: ../sala/index.php?action=lista");
}