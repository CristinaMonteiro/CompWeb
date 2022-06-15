<?php

namespace core\classes;

use Exception;

class Store{
    //$dados vão ser executdos caso existam
    public static function Layout($estruturas, $dados = null){

        //verifica se estruturas é um array
        if(!is_array($estruturas)){
            throw new Exception("Coleção de estruturas inválida");
        }


        //variáveis
        if(!empty($dados) && is_array($dados)){
            extract($dados);
        }

        //apresentar as views
        foreach($estruturas as $estrutura){
            include("../core/views/$estrutura.php");
        }
         

    }

    public static function clienteLogado(){

        //verificar se existe um cliente com sessão
        return(isset($_SESSION['cliente']));
    }

    public static function criarHash($num_caracteres = 12){

        // criar hashes
        $chars = '01234567890123456789abcdefghijklmnopqrstuwxyzabcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZABCDEFGHIJKLMNOPQRSTUWXYZ';
        return substr(str_shuffle($chars), 0, $num_caracteres);
    }

    public static function redirect($rota = ''){
        //faz o redireciomento para a url
        header("Location: " . BASE_URL . "?a=$rota");
    }


}