<?php

require_once("config.php");

    //CARREGA APENAS UM USUARIO
    //$root = new Usuario();
    //$root->loadById(3);
    //echo $root;

    //CARREGA UMA LISTA DE USUARIOS.
    //$lista = Usuario::getList();
    //echo json_encode($lista);

    //CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
    //$search = Usuario::search("jo");
    //echo json_encode($search);

    //CARREGA UM USUARIO USANDO O LOGIN E A SENHA

    $usuario = new Usuario();
    $usuario->login("jose", "1234567890");

    echo $usuario;
?>