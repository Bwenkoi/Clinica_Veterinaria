<!DOCTYPE html>
<html>
    <!-- the head section -->
    <head>
        <title>Clínica Melhor Amigo</title>
    <!--<div align="center"><img src="imagens/lv.png"/></div>-->
        <link rel="stylesheet" type="text/css" href="../novocss.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <!-- the body section -->
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <a href="../index.php" class="navbar-brand">
                    <img src="../imagens/lv.png" height="82" alt="CoolBrand">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <!-- Funcionário -->
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownFuncionarios" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Funcionários
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownFuncionarios">
                                <a class="dropdown-item" href="../funcionario/index.php?action=abre_form">Cadastrar Funcionário</a>
                                <a class="dropdown-item" href="../funcionario/index.php?action=lista_func">Listar Funcionários</a>
                            </div>
                        </div>
                        <!-- Cliente -->
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownClientes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Clientes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownClientes">
                                <a class="dropdown-item" href="../cliente/index.php?action=abre_form">Cadastrar Cliente</a>
                                <a class="dropdown-item" href="../cliente/index.php?action=lista_cliente">Listar Clientes</a>
                            </div>
                        </div>
                        <!-- Animal -->
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownAnimais" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Animais
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownAnimais">
                                <a class="dropdown-item" href="../animal/index.php?action=abre_form">Cadastrar Animal</a>
                                <a class="dropdown-item" href="../animal/index.php?action=lista_func">Listar Animais</a>
                            </div>
                        </div>
                        <!-- Sala -->
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownSalas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Salas
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownSalas">
                                <a class="dropdown-item" href="../sala/index.php?action=abre_form">Cadastrar Sala</a>
                                <a class="dropdown-item" href="../sala/index.php?action=lista">Listar Salas</a>
                            </div>
                        </div>
                        <!-- Medicamento -->
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownSalas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Medicamentos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownSalas">
                                <a class="dropdown-item" href="../medicamento/index.php?action=abre_form">Cadastrar Medicamentos</a>
                                <a class="dropdown-item" href="../medicamento/index.php?action=lista">Listar Medicamentos</a>
                            </div>
                        </div>
                        <!-- Estoque -->
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownSalas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Estoque
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownSalas">
                                <a class="dropdown-item" href="../estoque/index.php?action=abre_form">Incluir em Estoque</a>
                                <a class="dropdown-item" href="../estoque/index.php?action=lista">Listar Produtos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
