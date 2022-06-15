<?php

$rotas = [

    'inicio' => 'main@index',
    'loja' => 'main@loja',
    
    //cliente
    'novo_cliente' => 'main@novo_cliente',
    'criar_cliente' => 'main@criar_cliente',
    'confirmar_email' => 'main@confirmar_email',
    
    //login
    'login' => 'main@login',
    'login_submit' => 'main@login_submit',

    //logout
    'logout' => 'main@logout',
    
    'carrinho' => 'main@carrinho',

    
];

$acao = 'inicio';

if(isset($_GET['a'])){

    if(!key_exists($_GET['a'], $rotas)){
        $acao = 'inicio';
    } else {
        $acao = $_GET['a'];
    }

}

$partes = explode('@',$rotas[$acao]);
$controlador = 'core\\controllers\\'.ucfirst($partes[0]);
$metodo = $partes[1];

$ctr = new $controlador();
$ctr->$metodo();
//parte 0 corresponde ao controlador e o metodo é a função do controlador. Vai ser executada uma classe

