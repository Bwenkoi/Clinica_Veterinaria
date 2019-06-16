<?php
require('../model/database.php');
require('../model/medicamento_db.php');
require('../model/estoque_db.php');
require('../model/cliente_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

if ($action == 'abre_form') {
    $lista = lista();
    include('add_medicamento.php');
}

if ($action == 'add_confirm') {
    $medicamento = filter_input(INPUT_POST, 'medicamento');
    $id = get_medicamento_by_nome($medicamento);
    $local = filter_input(INPUT_POST, 'local');
    $quant = filter_input(INPUT_POST, 'quant');
    $preco = filter_input(INPUT_POST, 'precoC');
    if($local == null || $quant == null || $preco == null){
        $error = 'Os Campos devem ser Preenchidos!';
        include("../errors/error.php");
    }else{
        insere($id['id_medicamento'], $local, $quant, $preco);
        include('sucesso_add.php');
    }
}

if($action == 'lista'){
    $lista = lista_estoque();
    include('lista_estoque.php');
}

if($action == 'lista_nome'){
    $nome = filter_input(INPUT_POST, 'nome');
    $id = get_medicamento_by_nome($nome);
    $lista = lista_estoque_id($id['id_medicamento']);
    include('lista_estoque.php');
}

if($action == 'lista_local'){
    $local = filter_input(INPUT_POST, 'local');
    $lista = lista_estoque_local($local);
    include('lista_estoque.php');
}

if($action == 'realiza_venda'){
    $id = filter_input(INPUT_POST, 'medicamento');
    include('info_vendas.php');
}

if($action == 'sell_confirm'){
    $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $quant = filter_input(INPUT_POST, 'quant');
    $preco = filter_input(INPUT_POST, 'preco');
    $cpf = filter_input(INPUT_POST, 'cpf');
    $cliente = get_cliente_by_CPF($cpf);
    $lista = lista_estoque();
    $maior = false;
    foreach ($lista as $prod){
        if($id == $prod['id_medicamento']){
            if($quant > $prod['quant']){
                $maior = true;
            }else{
                $novoQuant = $prod['quant'] - $quant;
            }
        }
    }
    if($quant == null || $cpf == null){
        $error = 'Os Campos devem ser Preenchidos!';
        include("../errors/error.php");
    }else if($maior == true){
        $error = 'Não há tantos produtos no estoque!';
        include("../errors/error.php");
    }else if($cliente == null){
        $error = 'CPF não encontrado!';
        include("../errors/error.php");
    }else{
        cria_venda($id, $cpf, $quant, $quant*$preco);
        dar_baixa_estoque($id, $novoQuant);
        include('sucesso_sell.php');
    }
}
