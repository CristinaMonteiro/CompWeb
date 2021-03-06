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

}