<?php

    //verificar que tipo de request foi usado
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        die('Acesso negado.');
    }

    //verificar se existe usuario e senha
    if(!isset($_POST['usuario']) || !isset($_POST['senha'])){
        header('Location: index.html');
    }

    //verificar se existe os valores no POST
    if(!isset($_POST['usuario'])){
        header('Location: index.html');
    }

    if($_POST['usuario'] != 'joao' || $_POST['senha'] !='123'){
        echo 'Login inválido.';
        exit();
    }

    //verificar se a checkbox está ativa
    if(!isset($_POST['check_aceitar'])){
        echo 'Aceita.';
        exit();
    }

    echo '<pre>';
    print_r($_POST);

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    echo 'ok';

?>