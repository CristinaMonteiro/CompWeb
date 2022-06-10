<?php

namespace core\controladores;

use core\classes\Database;
use core\classes\Store;

class Main{


    public function index(){

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'inicio',
            'layouts/footer',
            'layouts/html_footer',
        ]);

    }

    public function loja(){
       
        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'loja',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }

    public function novo_cliente(){

        if(Store::clienteLogado()){
            $this->index();
            return;
        }

        //para um novo utilizador
        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'criar_cliente',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }


    public function carrinho(){
       
        
        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'carrinho',
            'layouts/footer',
            'layouts/html_footer', 
        ]);
    }
   
    public function criar_cliente(){
        
        //verifica se já existe sessão
        if(Store::clienteLogado()){
            $this->index();
            return;
        }

        //verificar se a submissão correu bem
        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            $this->index();
            return;
        } 

        //verificar se senha 1 = senha 2
        if($_POST['text_senha_1'] !== $_POST['text_senha_2']){

            //passwords diferentes
            $_SESSION['erro'] = 'Verifique se há erro nas senhas!';
            $this->novo_cliente();
            return;
        }

        //verificar na bd se existe clientes com mesmo email
        $bd = new Database();
        $parametros = [
            ':email' => strtolower(trim($_POST['text_email']))
        ];
        $resultados = $bd->select("SELECT email FROM clientes WHERE email = :email", $parametros); //o sistema pdo faz samitização daquilo que pode danificar a bd
        
        //se o cliente já existe...
        if(count($resultados) != 0){
            $_SESSION['erro'] = 'Já existe um cliente com esse email!';
            $this->novo_cliente();
            return;
        }

        
       
       
       
        /* 
        
        1.verificar se a senha 1 = senha 2
        2.base de dados - já existe outra conta com o mesmo email
        3.registo
            criar purl
            guardar os dados na atbela
            enviar eail com o purl para o cliente
            apresentar umma mensagem de validação
        
        */

    }
}

